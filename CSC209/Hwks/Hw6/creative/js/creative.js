// note : for some reason the code wouldmt work until i refresed so I added the event listener that waits until DOM is fully loaded to start
document.addEventListener("DOMContentLoaded", () => {

    let rows = 30;  
    let cols = 30;
    let grid = [];

    // initilizes the grid 
    function initializeGrid() {
        grid = [];
        for (let i = 0; i < rows; i++) {
            grid[i] = [];
            for (let j = 0; j < cols; j++) {
                // makes sure that grid spawns in not colored(aka dead)
                grid[i][j] = { alive: false };
            }
        }
    }

    // function to create and render the table
    function drawGrid() {
        let table = document.getElementById("grid");
        //clears grid
        table.innerHTML = ""; 

        for (let i = 0; i < rows; i++) {
            // row element is table row
            let rowElement = document.createElement("tr");
            for (let j = 0; j < cols; j++) {

                // cell element is the table data 
                let cellElement = document.createElement("td");
                // used this article to learn about dataset: https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/dataset
                cellElement.dataset.row = i;
                cellElement.dataset.col = j;
                cellElement.classList.add("dead"); 

                // on click the cell comes alive
                cellElement.addEventListener("click", () => {
                    grid[i][j].alive = !grid[i][j].alive;
                    cellElement.classList.toggle("alive", grid[i][j].alive);
                });

                rowElement.append(cellElement);
            }
            table.append(rowElement);
        }
    }

    // updates grid
    function updateGrid() {
        let tableCells = document.querySelectorAll("#grid td");
        tableCells.forEach((cell) => {
            let i = cell.dataset.row;
            let j = cell.dataset.col;
            cell.classList.toggle("alive", grid[i][j].alive);
        });
    }

    // next generation function
    function nextGeneration() {
        var newGrid = [];
        
        for (var i = 0; i < rows; i++) {
            var newRow = [];
            for (var j = 0; j < cols; j++) {
                var newCell = Object.assign({}, grid[i][j]);
                var neighbors = numofAliveNeighbors(i, j);
    
                if (grid[i][j].alive) {
                    newCell.alive = (neighbors === 2 || neighbors === 3);
                } else {
                    newCell.alive = (neighbors === 3);
                }
    
                newRow.push(newCell);
            }
            newGrid.push(newRow);
        }
    
        grid = newGrid;
        updateGrid();
    }
    
    // function to count alive neighbors
    function numofAliveNeighbors(row, col) {
        let num = 0;
        for (let i = -1; i <= 1; i++) {
            for (let j = -1; j <= 1; j++) {
                if (i === 0 && j === 0) continue;
                let neighbori = row + i;
                let neighborj = col + j;
                if (neighbori >= 0 &&
                     neighbori < rows &&
                      neighborj >= 0 &&
                       neighborj < cols &&
                        grid[neighbori][neighborj].alive) {
                    num++;
                }
            }
        }
        return num;
    }

    // function to reset the grid
    function resetGrid() {
        initializeGrid(); 
        drawGrid();       
        document.getElementById("presetSelect").value = "empty"; 

    }

    // function to change grid size
    function changeGridSize(size) {
        if (size === "small") {
            rows = cols = 10;
        } else if (size === "med") {
            rows = cols = 20;
        } else if (size === "Lg") {
            rows = cols = 30;
        }
        resetGrid();
    }

       // applies presets 
       function applyPreset(preset, size) {
        // reset grid
        initializeGrid(); 
    
        if (preset === "random") {
            for (let i = 0; i < rows; i++) {
                for (let j = 0; j < cols; j++) {
                    // randomly makes the cells alive via loop 
                    grid[i][j].alive = Math.random() < 0.3;
                }
            }
        } else if (preset === "allSqs") {
            for (let i = 0; i < rows; i++) {
                for (let j = 0; j < cols; j++) {
                    // makes all the cells alive via loop 
                    grid[i][j].alive = true; 
                }
            }
        } else if (preset === "glider") {
            // starts at 1, 1
            let startX = 1, startY = 1; 
            // starts in diff spot depending on grid size
            if (size === "med") {
                startX = 3;
                startY = 3;
            } else if (size === "Lg") {
                startX = 6;
                startY = 6;
            }
        
            let gliderStart = [
                [0, 1], 
                [1, 2], 
                [2, 0], 
                [2, 1], 
                [2, 2]
            ];
        
            // moves the glider 
            for (let i = 0; i < gliderStart.length; i++) {
                let x = startX + gliderStart[i][0];
                let y = startY + gliderStart[i][1];
        
                if (x >= 0 && x < rows && y >= 0 && y < cols) {
                    grid[x][y].alive = true;
                }
            }
        }
        
        updateGrid();
    }

    
    //functions to handle tying the  dropdowns to the event listeners 
    function handleGridSizeChange(event) {
        changeGridSize(event.target.value);
    }
    function handlePresetChange(event) {
        let size = document.getElementById("gridSizeSelect").value;
        applyPreset(event.target.value, size);
    }
    
    // event listeners
    // Note: structure is .getElementById(button name ).addeventLIstener(event, function to happen after click)
    document.getElementById("nextGenBtn").addEventListener("click", nextGeneration);
    document.getElementById("resetButton").addEventListener("click", resetGrid);
    document.getElementById("presetSelect").addEventListener("change", handlePresetChange);
    document.getElementById("gridSizeSelect").addEventListener("change", handleGridSizeChange);


    initializeGrid();
    drawGrid();
});


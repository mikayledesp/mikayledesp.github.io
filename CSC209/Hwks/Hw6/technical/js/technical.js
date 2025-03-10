// note : for some reason the code wouldmt work until i refresed so I added the event listener that waits until DOM is fully loaded to start
document.addEventListener("DOMContentLoaded", () => {

    let rows = 10;  
    let cols = 10;
    let grid = [];

    // initilizes the grid 
    function initializeGrid() {
        grid = [];
        for (let i = 0; i < rows; i++) {
            grid[i] = [];
            for (let j = 0; j < cols; j++) {
                // makes sure that grid spawns in false 
                grid[i][j] = { alive: false };
            }
        }
    }

    // function to create and render the table
    function drawGrid() {
        let table = document.getElementById("grid");
        table.innerHTML = ""; // Clear previous grid

        for (let i = 0; i < rows; i++) {
            let rowElement = document.createElement("tr");
            for (let j = 0; j < cols; j++) {
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

    // Function to advance to the next generation
    function nextGeneration() {
        let newGrid = JSON.parse(JSON.stringify(grid));

        for (let i = 0; i < rows; i++) {
            for (let j = 0; j < cols; j++) {
                let neighbors = numofAliveNeighbors(i, j);
                if (grid[i][j].alive) {
                    newGrid[i][j].alive = neighbors === 2 || neighbors === 3;
                } else {
                    newGrid[i][j].alive = neighbors === 3;
                }
            }
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

    // applies presets 
    function applyPreset(preset) {
    initializeGrid(); // Reset the grid

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
                grid[i][j].alive = true; // Ensure all cells are filled
            }
        }
    }

    updateGrid(); // Refresh the grid display
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
    //functions to handle tying the  dropdowns to the event listeners 
    function handlePresetChange(event) {
        applyPreset(event.target.value);
    }
    
    function handleGridSizeChange(event) {
        changeGridSize(event.target.value);
    }
    // event listeners
    document.getElementById("nextGenBtn").addEventListener("click", nextGeneration);
    document.getElementById("resetButton").addEventListener("click", resetGrid);
    document.getElementById("presetSelect").addEventListener("change", handlePresetChange);
    document.getElementById("gridSizeSelect").addEventListener("change", handleGridSizeChange);


    initializeGrid();
    drawGrid();
});
// to do check when all the squares are covered, glider, still lifes 


// waits until DOM is fully loaded to start
// note : for some reason the code wouldmt work until i refresed so I added the event listener
document.addEventListener("DOMContentLoaded", () => {
    let rows = 10;  // Default grid size
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

    // Function to create and render the table
    function drawGrid() {
        let table = document.getElementById("grid");
        table.innerHTML = ""; // Clear previous grid

        for (let i = 0; i < rows; i++) {
            let rowElement = document.createElement("tr");
            for (let j = 0; j < cols; j++) {
                let cellElement = document.createElement("td");
                cellElement.dataset.row = i;
                cellElement.dataset.col = j;
                cellElement.classList.add("dead"); // Default state

                // on click the cell comes alive
                cellElement.addEventListener("click", () => {
                    grid[i][j].alive = !grid[i][j].alive;
                    cellElement.classList.toggle("alive", grid[i][j].alive);
                });

                rowElement.appendChild(cellElement);
            }
            table.appendChild(rowElement);
        }
    }

    // Function to update the table grid
    function updateHTMLGrid() {
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
        updateHTMLGrid();
    }

    // function to count alive neighbors
    function numofAliveNeighbors(row, col) {
        let num = 0;
        for (let i = -1; i <= 1; i++) {
            for (let j = -1; j <= 1; j++) {
                if (i === 0 && j === 0) continue;
                let neighbori = row + i;
                let neighborj = col + j;
                if (neighbori >= 0 && neighbori < rows && neighborj >= 0 && neighborj < cols && grid[neighbori][neighborj].alive) {
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
    }

    // function to apply pattern (random or empty)
    function applyPattern(pattern) {
        initializeGrid();
        if (pattern === "random") {
            for (let i = 0; i < rows; i++) {
                for (let j = 0; j < cols; j++) {
                    grid[i][j].alive = Math.random() < 0.3;
                }
            }
        }
        updateHTMLGrid();
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

    // event listeners
    document.getElementById("nextGenBtn").addEventListener("click", nextGeneration);
    document.getElementById("resetButton").addEventListener("click", resetGrid);
    document.getElementById("patternSelect").addEventListener("change", (event) => {
        applyPattern(event.target.value);
    });

    document.getElementById("gridSizeSelect").addEventListener("change", (event) => {
        changeGridSize(event.target.value);
    });


    initializeGrid();
    drawGrid();
});

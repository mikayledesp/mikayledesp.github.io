// Couldnt figure out how to make the icon appear so i justv continued to use the class names 
// LEVEL 5
// function addRow(option1, option2){
//     var ROW = "<tr>"+"<td>"+"Sample text" +"</td>"+"<td>"+ option1  + "</td>"+ "<td>"+  option2 + "</td>" + "</tr>";
   
//     document.getElementById("table").innerHTML += ROW;
//     document.getElementById("table").innerHTML += ROW;
//     // alert(ROW)
//   }

// let option1 = "fa fa-remove";
// let  option2 = "fa fa-check"
// addRow(option1, option2);

// LEVEL 6
function addRows(option1, option2, NRROWS){
  for(var i = 0; i< NRROWS; i ++){
    var ROW = "<tr>"+"<td>"+"Sample text" +"</td>"+"<td>"+ option1  + "</td>"+ "<td>"+  option2 + "</td>" + "</tr>";
     document.getElementById("table").innerHTML += ROW;
  }
}
let option1 = "fa fa-remove";
let  option2 = "fa fa-check"

//declared in html that NRROWS = 10;
addRows(option1, option2, 10);
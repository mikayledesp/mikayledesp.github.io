// Couldnt figure out how to make the icon appear so i justv continued to use the class names 

// LEVEL 7
// function addRows(){
//   for (var i = 0; i< NRROWS; i++){
//     var feature = FEATURES[i];
//     var basic =  BASIC[i];
//     var pro = PRO[i];
//     var ROW = "<tr>"+"<td>"+ feature+"</td>"+"<td>"+ basic  + "</td>"+ "<td>"+  pro + "</td>" + "</tr>";
//     document.getElementById("table").innerHTML += ROW;
//   }
// }
// //declared in html that NRROWS = 10;
// addRows();


function addRows() {
  for (var i = 0; i < NRROWS; i++) {
    var feature = FEATURES[i];
    var basic =  BASIC[i];
    var pro = PRO[i];
    addSingleRow(feature, basic, pro);
  }
}
function addSingleRow(feature, basic, pro) {
  // found way to make the actual icons show up! it took me a while to realize that <iclass = > could also be taken in as a string
  var ROW = "<tr>" + "<td>" + feature + "</td>" + "<td>"+"<i class='fa " + basic + "'></i>"+"</td>" + "<td>"+"<i class='fa " + pro + "'></i>"+"</td>" + "</tr>";
  
  document.getElementById("table").innerHTML += ROW;
}

addRows();
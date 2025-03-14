// Couldnt figure out how to make the icon appear so i justv continued to use the class names 

// LEVEL 7
function addRows(){
  for (var i = 0; i< NRROWS; i++){
    var feature = FEATURES[i];
    var basic =  BASIC[i];
    var pro = PRO[i];
    var ROW = "<tr>"+"<td>"+ feature+"</td>"+"<td>"+ basic  + "</td>"+ "<td>"+  pro + "</td>" + "</tr>";
    document.getElementById("table").innerHTML += ROW;
  }
}
//declared in html that NRROWS = 10;
addRows();
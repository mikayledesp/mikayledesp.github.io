  // Couldnt figure out how to make the icon appear so i justv continued to use the class names 
  // var ROW = "<tr>"+"<td>" + "CHECKCROSSBASIC"  + "</td>"+ "<td>"+  "CHECKCROSSPRO" + "</td>" + "</tr>";
 
function addRow(option1, option2){
    var ROW = "<tr>"+"<td>"+"Sample text" +"</td>"+"<td>"+ option1  + "</td>"+ "<td>"+  option2 + "</td>" + "</tr>";
   
    document.getElementById("table").innerHTML += ROW;
    document.getElementById("table").innerHTML += ROW;
    // alert(ROW)
  }

let option1 = "fa fa-remove";
let  option2 = "fa fa-check"
addRow(option1, option2);

// <!-- <button onclick="myFunction()">Click me</button> -->

// <!-- example of what the td looked like before i deleted them 
//     <td><i class="fa fa-check"></i></td>
//     <td><i class="fa fa-check"></i></td>
//     -->
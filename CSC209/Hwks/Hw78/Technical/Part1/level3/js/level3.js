// function makeVisible(option){
//     if(option== bus){
//         document.getElementById("bus").style.visibility = "visible";
//     }
//     if(option== fountains){
//         document.getElementById("fountains").style.visibility = "visible";
//     }
//     if (option == musuem){
//         document.getElementById("musuem").style.visibility = "visible";
//     }
// }
// instead starting off with all of them hidden 
function makeVisible(option) {
    document.getElementById("bus").style.visibility = "hidden";
    document.getElementById("fountains").style.visibility = "hidden";
    document.getElementById("musuem").style.visibility = "hidden";

    document.getElementById(option).style.visibility = "visible";
}

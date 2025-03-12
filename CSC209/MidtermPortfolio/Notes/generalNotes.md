At the end of the day to iteratively create ANY type of content you'll have to do the following:

1) Declare variables and divs 
(Example 
Declare general output div for handling the output
Usually an array like so:
 var fruits=[ "apples", pears" , grapes"];
Then declare outputs
 var outputHTML = " ";
)


2) Loop over our arrays and create our html string 
Example:

// can use specific elements in the output like outputHTML += "<table>"

For(var i = 0; i <fruits.length; i++){

// adding to output each time counter var(i) is incremented 
    Output +="<td> +  animals[i] + "</td>";

}
// make sure to close ur table like so outputHTML += "<\table>"

 3) Handle output for HTML by using document.getElementByID
Example :

document.getElementById("output_div").innerHTML = outputHTML;


Now u can create a nested for loop when needing to create a gird of some kind, especially w multiple arraysthat would look like this :

Example:
Var output = " ";
Array1 = [whatever u want];
Array2 = [whatever u want];
Create output div for content 

For(var i =0; i  < array1.length; i++){
for (var j = 1; j < array2.length; j ++){
loop conditions that update to output 
Ex : output += arr1[i] + arr2[j];
}
}

Then finally print in dom by doing 

Document.getElementByID("output_Div".interHTML = outputHTML;
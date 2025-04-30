<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/indexStyle.css">
</head>
<body>
<h1> Admin Only View</h1>
<center><p>To Proceed, Enter Admin Password</p><center>
<center>
    <form id="pswd">
    <input type="password" id="validate" 
           placeholder="Enter Password">
    <button type="button" onclick="pwordValidate()">Submit</button>
</form>
<center>
<script>
    function pwordValidate() {
        let inputPswd = document.getElementById("validate").value;
        let correctPswd = "Admin1";
        if (inputPswd === correctPswd) {
            window.location.href = "loggedview/adminApp.html.php";
        } else {
            alert("Incorrect password!");
        }
    }
</script>
</body>
</html>
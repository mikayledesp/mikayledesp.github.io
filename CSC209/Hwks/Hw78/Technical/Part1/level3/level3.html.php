<?php include "php/level3.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Level 3</title>
    <link rel="stylesheet" href="css/level3.css">
</head>
<body>

<h1>Level 1</h1>
<div class="gallery">
    <?php imgGenerate(); ?>
</div>
<div class="dropdown">
<label for="pictures">Choose a picture </label>
    <select name="pictures">
        <option value="bus">London Bus</option>
        <option value="fountains">Fountains in Hyde Park, London</option>
        <option value="musuem">National Gallery In London</option>
    </select>
</div>
<script src="js/level3.js"></script>
</body>
</html>

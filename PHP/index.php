<!DOCTYPE html>
<html lang="fi">
<head>
<title>PHP</title>
<link rel="stylesheet" href="oma.css" type="text/css">
</head>
<body>

<h1>Hello World</h1>
<p>
    <?php  
        $name = "Tampere";
        echo "Hello $name"
    ?>
    <br>
    <?= "How are you $name"?>
</p>

<?php
    if(isset($_GET['name'])){
        echo "Hello " . $_GET['name'];
    } else {
        echo "Hello, stranger";
    } ?>






</body>
</html>
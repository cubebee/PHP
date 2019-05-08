<?php require "head.php"; ?>

<h2>Harjoitus 1</h2>

<form action="h1.php" method="get">
    Etunimi: <input type="text" name="name" maxlength=30><br>
    Ikä:     <input type="number" name="age"><br>
             <input type="submit" value="Lähetä">
</form>

<?php
    if(isset($_GET['name'], $_GET['age'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        echo "Mitä kuuluu  $name? ", "Olet $age vuotta vanha";
    }
?>

<?php require "footer.php"; ?>
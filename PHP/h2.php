<?php require "head.php"; ?>

<h2>Harjoitus 2</h2>

<form action="h2.php" method="get">
    Anna rahamäärä: <input type="number" name="euro" maxlength=30><br>
    Anna loppusumma: <input type="number" name="summa"><br>
             <input type="submit" value="Lähetä">
</form>

<?php
    if(isset($_GET['euro'], $_GET['summa'])){
        $takaisin = round ($_GET['euro'] - $_GET['summa'],2) ;
        if ($takaisin >=0){
            echo"takaisin annettava summa: $takaisin";
        }else{
            echo"tarvitsen pennosia";
        }
    }
?>

<?php require "footer.php"; ?>
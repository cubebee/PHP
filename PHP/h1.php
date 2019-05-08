<?php require "head.php"; ?>

<h2>Harjoitus 1</h2>

<form action="h1.php" method="get">
    Anna rahamäärä: <input type="number" name="euro" maxlength=30><br>
             <input type="submit" value="Lähetä">
</form>

<?php
    function laske($raha, $litrahinta){
        $vastaus = round($raha/$litrahinta, 2);
        return $vastaus;
    }
    if(isset($_GET['euro'])){
        $raha = $_GET['euro'];
        $litrahinta = 1.55;
        echo "tulos on " . laske($raha, $litrahinta) . " ";
    }
?>

<?php require "footer.php"; ?>
<?php
    include('./config.php');
$nadpis = " Čau ".meno."".priezvisko;
$popis="doklady poprosim";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./assets/CSS/grafika.css">
</head>
<input type="text" name="meno" value="<?php echo $nadpis;?>">
<h><?php echo $nadpis; ?></h>
<p><?php echo $popis; ?></p>
</body>
</html>   

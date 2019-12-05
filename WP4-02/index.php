<?php 
require_once "debitor.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Šrouby od matky</title>
</head>
<body>
    <?php 
    $myDebitor1 = new Debitor(1, 500, "David", "Mareš", "Bad boy");
    $myDebitor2 = new Debitor(1, 500, "David", "Mareš", "Bad Guy");
    
    $myDebitorJSON = json_encode((array) $myDebitor)
    var_dump($myDebitorJSON);
    ?>
</body>
</html>
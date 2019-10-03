<?php
$player1=rand(100, 600);
$player2=rand(100, 600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Šrouby od matky</title>
    <link rel="stylesheet" type="text/css" href="assets/ikonik/font/flaticon.css">
    <style>
    .player-1 {
        color: red;
    }
    .player-1:before {
        font-size: <?= $player1 ;?>px;

    } 
    .player-2 {
        color: blue;
    }
    .player-2:before {
        font-size: <?= $player2 ?>px;

    }
    .w-50{
        width: 50%; 
    }
    .left {
        float: left;
    }
    .winner {
        font-size: 80px;
        text-align: center;
        width: 100%;
    }
    </style> 
</head>
<body>
<div class="w-50 left">
<h1>Player 1 = <?= $player1 ?></h1>
<span class="flaticon-fighter-plane player player-1"></span>
</div>
<div class="w-50 left">
<h1>Player2 = <?= $player2 ?> </h1>
<span class="flaticon-fighter-plane-1 player player-2"></span>
</div>
<div class="winner">
 <?php
 if ($player1>$player2) {
     echo 'Player 1 wins!';
 } elseif ($player1==$player2) {
     echo 'Stalemate!';
 } else {
     echo 'Player 2 wins!';
 }
 ?>
 </div>
</body>
</html>
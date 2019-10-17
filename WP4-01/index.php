<?php
require_once 'classes' . DIRECTORY_SEPARATOR . 'Player.php';
$players[]= new Player('Dalekorej', 'mada', 'fighter-plane-1');
$players[]= new Player('Kokeš', 'maka', 'cannon');
$players[]= new Player('Marešová', 'kama', 'ship');
$players[]= new Player('Klimek', 'krkl', 'helicopter');
$players[]= new Player('Mareš', 'dama', 'submarine');
$players[]= new Player('Fenfls', 'make', 'gas-mask');

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
        
       <?php ?>

        .player-mada:before {
            font-size: 180px;
        }
        
        <?php
        foreach ($players as $player) {
            ?>.player-<?php echo $player->getID(); ?>:before {
                 font-size: <?= $player->getSize(); ?>px;
             }
        
        <?php
        }
        
        ?>
        </style>
    </head>

    <body>
       <div class="row">

       <?php
                foreach ($players as $player) {
                    ?><p>Player <?php echo $player->getName(); ?> = <?php echo $player->getSize(); ?></p>
                    <span class="flaticon-<?php echo $player->getIcon(); ?> player player-<?php echo $player->getID(); ?>" style="color:<?php echo $player->getColor(); ?>"></span>
                <?php
                }


                $mostsize = 0;
                $winner = "none";

                foreach ($players as $player) {
                    if ($player->getSize() > $mostsize ) {
                        $mostsize = $player->getSize();
                        $winner = $player->getName();
                    }
                }
                ?>
                 <br>
                <?=
                 "Vyhrává " . $winner . " se skóre: $mostsize ";
                ?>
        
        
        
        
    </body>

    </html>
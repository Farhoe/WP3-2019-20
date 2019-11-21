<?php
require_once 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$players = array (

new Player('Dalekorej', 'mada',  'Za hordu život položím'),
new Player('Kokeš', 'maka', 'Přišel sekáč. Třeste se.'),
new Player('Marešová', 'kama', 'Vy jste mi to teda král, vás já příště volit nebudu.'),
new Player('Klimek', 'krkl', 'Ano. Takže jdeme dál'),
new Player('Mareš', 'dama', 'Héj jsem utlačovanej'),
new Player('Fenfls', 'make', 'Už je to tak. Je ze mně mrtvola'),
);

    // Dalekorej
$players[0]->addUnit(new Unit(rand(1,5), "green", "10"));
$players[0]->addUnit(new Unit(rand(1,5), "green", "10"));
$players[0]->addUnit(new Unit(rand(1,5), "green", "10"));
$players[0]->addUnit(new Unit(rand(1,5), "green", "10"));
$players[0]->addUnit(new Unit(rand(1,5), "green", "10"));
$players[0]->addUnit(new Unit(rand(1,5), "green", "10"));
    // Kokeš
$players[1]->addUnit(new Unit(rand(1,5), "blue", "10"));
$players[1]->addUnit(new Unit(rand(1,5), "blue", "10"));
$players[1]->addUnit(new Unit(rand(1,5), "blue", "10"));
$players[1]->addUnit(new Unit(rand(1,5), "blue", "10"));
$players[1]->addUnit(new Unit(rand(1,5), "blue", "10"));
    // Marešová
$players[2]->addUnit(new Unit(rand(1,5), "black", "10"));
$players[2]->addUnit(new Unit(rand(1,5), "black", "10"));
$players[2]->addUnit(new Unit(rand(1,5), "black", "10"));
$players[2]->addUnit(new Unit(rand(1,5), "black", "10"));
    // Klimek
$players[3]->addUnit(new Unit(rand(1,5), "purple", "10"));
$players[3]->addUnit(new Unit(rand(1,5), "purple", "10"));

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
        .w-50 {
            width:50%;
        }
        .left {
            float:left;
        }
        .clearfix {
            clear:both;
        }
        .player-mako:before {
            font-size: 180px;
        }
        
        </style>
    </head>

    <body>
       
    <div class="row">
             <?php /*
                foreach ($players as $player) {     
                    
                             //    Matej Dalekorej                       =         500
                        ?><p>Player <?php echo $player->getName();?> =  px. <?php echo $player->getDescription();?></p>
                         <?php foreach ($player->getUnits() as $unit) {
                            
                         }
                         ?>
                    <div class="">
                        <span class="flaticon-<?php echo $player->units->getIcon();?> player-<?php echo $player->getId(); ?>" style="color:<?php echo $player->units->getColor();?> ;"></span>
                    </div>
          <?php } ?>  
                */

            
                foreach ($players as $player) {     
                
                        ?><p> Player <?=  $player->getName();?> .
                                     <?=  $player->getDescription();?>
                          </p>
                         
                        <?php foreach ($player->getUnits() as $unit) { ?>
                            
                           <div>
                                 <span 
                                       class="flaticon-<?=  $unit->getIcon();?>
                                              player-<?=  $player->getId();?>" 
                                       style="color:<?=  $unit->getColor();?>; 
                                              font-size:<?=  $unit->getSize();?>px;">
                                 </span>
                           </div>

            <?php }     
                  }
             ?>
        </div>
    <?php 
    /*
        $highestSize = 0;
        $winnerName = "None";
        foreach ($players as $player) {
            if ($player->getSize() > $highestSize) {
                $highestSize = $player->getSize();
                $winnerName = $player->getName();
            } 
            
        }
        echo "<b>Výherce je : " .  $winnerName . " s velikostí = " . $highestSize . " px.</b>"; 
    */
        ?>
    </body>

    </html>
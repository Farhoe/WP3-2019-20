<?php
 
 class Player
 {
     private $color;
     private $size;

     public function __construct($name, $color = 'none', $size = 0)
     {
         {
             if ($size<=0) {
                 $size = rand(100, 300);
             }
             if ($color == 'black') {
                 $r = rand(0, 255);
                 $g = rand(0, 255);
                 $b = rand(0, 255);
                 $color = "rgb($r,$g,$b)";
             }
         }
         $this->name = $name;
         $this->color = $color;
         $this->size = $size;
     }

     public function getColor()
     {
         return $this->color;
     }

     public function getSize()
     {
         return $this->size;
     }
 }

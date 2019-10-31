<?php 
 
 class Player
 {
     private $color;
     private $size;
     private $name;
     private $ID;
     private $icon;
     private $description;

     public function __construct($name, $ID, $icon, $description, $color = 'none', $size = 0)
     {
         {
             if ($size<=0) {
                 $size = rand(100, 300);
             }
             if ($color == 'none') {
                 $r = rand(0, 255);
                 $g = rand(0, 255);
                 $b = rand(0, 255);
                 $color = "rgb($r,$g,$b)";
             }
         }
         $this->name = $name;
         $this->color = $color;
         $this->size = $size;
         $this->id = $ID;
         $this->icon = $icon;
         $this->description = $description;
     }

     public function getColor()
     {
         return $this->color;
     }

     public function getSize()
     {
         return $this->size;
     }
     public function getName()
     {
         return $this->name;
     }
     public function getID()
     {
         return $this->ID;
     }
     public function getIcon()
     {
         return $this->icon;
     }
     public function getDescription() {
         return $this->description;
     }
     public function setDescription($description) {
         $this->description = $description;
     }
 }

<?php
class Unit
{   
    private $color;
    private $size;
    private $icon;
    
    public function __construct($icon, $color = "NONE", $size = 0) {
        if ($size <= 0) {
            $size = rand(100, 300);
        }
        if ($color == "NONE") {
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);
            $color = "RGB($r,$g,$b)";
        } 
        $this->color = $color;
        $this->size = $size;
        $this->icon = $icon;
    }
    private function getIconById($id) {
        $icons = array(
            "tank",
            "fighter-plane",
            "helicopter",
            "knife",
            "bomb",
            "soldier",
            "ship",
            "submarine"
        );
        return $icons[$id];
    }
    public function getColor() {
       return $this->color;        
    }    
    public function getSize() {
       return $this->size;        
    }

    public function getIcon() {
        return $this->getIconById($this->icon);
    }
}
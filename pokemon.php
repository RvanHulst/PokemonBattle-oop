<?php
class Pokemon {
	public $name ='';
    public $energytype ='';
    public $health =0;
    public $attacks =[];
    public $weakness = []; 
    public $resistance =[]; 
    
    public function __construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance)

 {
        $health = $hitpoints;
        $this->name = $name;
        $this->energytype = $energytype;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
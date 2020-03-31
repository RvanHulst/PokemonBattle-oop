<?php
class Pokemon {
	public $name ='';
    public $energytype ='';
    public $health =0;
    public $attacks =[];
    public $weakness = []; 
    public $resistance =[]; 
    
    public function __construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance)
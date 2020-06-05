<?php  
class Charmeleon extends Pokemon {

public function __construct($name)
{
	$energytype = new Energytype("fire");
	$hitpoints = 60;
	$health = $hitpoints;
	$attacks = array(
		'head butt' => new Attack('Head Butt',10),
		'flare' => new Attack('Flare',30), 
	
	);
	$weakness = new Weakness('water', 2);
	$resistance = new Resistance('Lightning', 10);

	parent::__construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance);
}
 
}

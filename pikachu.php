<?php  
class Pikachu extends Pokemon {

public function __construct($name)
{
	$energytype = new Energytype("lightning");
	$hitpoints = 60;
	$health = $hitpoints;
	$attacks = array(
		'electric ring' => new Attack('electric ring', 50),
		'picka punch' => new Attack('picka punch', 20), 
	
	);
	$weakness = new Weakness('fire', 1,5);
	$resistance = new Resistance('Fighting', 20);

	parent::__construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance);
}

}

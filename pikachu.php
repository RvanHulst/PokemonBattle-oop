<?php  
class Pikachu extends Pokemon {

public function __construct($health,)
{
	$energytype = new Energytype("lightning");
	$hitpoints = 60;
	$attacks = array(
		'electric ring' => new Attack('electric ring', 50),
		'picka punch' => new Attack('picka punch', 20), 
	
	);
	$weakness = new Weakness('fire', 1,5);
	$resistance = new Resistance('Fighting', 20);

	parent::__construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance);
}

}

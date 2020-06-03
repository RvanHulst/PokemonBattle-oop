<?php  
/* $charmeleon  =  new Pokemon(
	'Charmeleon',
	'Fire', 
	 60,
	[['Head Butt',10],['Flare',30]],
	['Water', 2],
	['Lightning',10]
); */


<?php  
class Charmeleon extends Pokemon {

public function __construct($health,)
{
	$energytype = new Energytype("fire");
	$hitpoints = 60;
	$attacks = array(
		'electric ring' => new Attack('Head Butt',10),
		'picka punch' => new Attack('Flare',30), 
	
	);
	$weakness = new Weakness('water', 2);
	$resistance = new Resistance('Lightning', 10);

	parent::__construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance);
}

}

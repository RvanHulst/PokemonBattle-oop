<?php 
require 'pokemon.php';
require 'pikachu.php';
require 'charmeleon.php';


$charmeleon  =  new Pokemon(
	'Charmeleon',
	'Fire', 
	 60,
	[['Head Butt',10],['Flare',30]],
	['Water', 2],
	['Lightning',10]
);

$pikachu =  new Pokemon(
	'Pikachu',
	'Lightning', 
	 60,
	[['Electric Ring',50 ],['Pika Punch',20]],
	['Fire', 1.5],
	['Fighting',20]
);


print_r("<pre>Charmeleon's health ". $charmeleon->health . "</pre>=Pikachu does a Electric Ring attack on Charmeleon=");
$pikachu->attack($charmeleon, 0);
print_r("<pre>Charmeleon's health after attack ". $charmeleon->health . '</pre>==Switching Turns==');
print_r("<pre>Pikachu's health ". $pikachu->health . "</pre>=Charmeleon does a Flare attack on Pikachu=");
$charmeleon->attack($pikachu, 1);
print_r("<pre>Pikachu's health after attack ". $pikachu->health . '</pre>');
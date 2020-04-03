<?php 
require 'pokemon.php';
require 'pikachu.php';
require 'charmeleon.php';

print_r("<pre>Charmeleon's health ". $charmeleon->health . "</pre>=Pikachu does a Electric Ring attack on Charmeleon=");
$pikachu->attack($charmeleon, 0);
print_r("<pre>Charmeleon's health after attack ". $charmeleon->health . '</pre>==Switching Turns==');
print_r("<pre>Pikachu's health ". $pikachu->health . "</pre>=Charmeleon does a Flare attack on Pikachu=");
$charmeleon->attack($pikachu, 1);
print_r("<pre>Pikachu's health after attack ". $pikachu->health . '</pre>');
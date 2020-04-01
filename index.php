<?php 
require 'pokemon.php';
require 'pikachu.php';
require 'charmeleon.php';

print_r("<pre>Charmeleon's health ". $charmeleon->health . "</pre>=Pikachu does a Electric Ring attack on Charmeleon=");
$pikachu->attack($charmeleon, 0);
print_r("<pre>Charmeleon's health after attack ". $charmeleon->health . '</pre>==Switching Turns==');
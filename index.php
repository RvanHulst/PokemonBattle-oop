<?php 
require 'pokemon.php';
require 'pikachu.php';
require 'charmeleon.php';
require 'energytype.php';
require 'attack.php';
require 'resistance.php';
require 'weakness.php';

$pikachu = new pikachu('john');
$charmeleon = new charmeleon('dabby');

$pikachu->attack($charmeleon, $pikachu->attacks['electric ring'] );

$charmeleon->attack($pikachu, $charmeleon->attacks['head butt'] );


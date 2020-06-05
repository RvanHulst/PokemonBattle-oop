<?php

class Pokemon {
	public $name;
    public $energytype;
    public $hitpoints;
    public $attacks;
    public $weakness; 
    public $resistance; 
    
    public function __construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance)
 {
        $this->name = $name;
        $this->energytype = $energytype;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
   }
   public function attack($enemy, $attack){
        print_r("<pre> ". $enemy->name ." health ". $enemy->health . "</pre>= ". $this->name ."does a ". $attack->name ." attack on ". $enemy->name ." =");
        $enemy->takedamage($this, $attack->damage);
        print_r("<pre>". $enemy->name ." health after attack ". $enemy->health . '</pre>==Switching Turns==');

    // if ($this->energytype == $enemy->weakness[0]) {
    //    $damage = $damage * $enemy->weakness[1];
    // }
    // if ($this->energytype == $enemy->resistance[0]) {
    //    $damage -= $enemy->resistance[1];
    // }
    // $enemy->health-=$damage;
  }
public function takedamage($attackingpokemon, $hitpoints){
   //attacking pokemon engergytype = ape
   $ape = $attackingpokemon->energytype->name;
   //targetweakness
   $tw = $this->weakness->name;
   //targetresistance
   $tr = $this->resistance->name;

   if ($ape == $tw) {
      $hitpoints = $hitpoints * $this->weakness->multiplier;
   }
   if ($ape == $tr) {
      $hitpoints = $hitpoints * $this->resistance->multiplier;
   }
   $this->health = $this->health - $hitpoints;
}

public function __toString() {
       return json_encode($this);
  }

}
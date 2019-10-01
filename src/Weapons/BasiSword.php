<?php
namespace Styde\Weapons;

use Styde\Unit;
use Styde\Weapon;

class BasicSword extends Weapon{

    protected $damage = 40;
    
    public function getDescription(Unit $attacker , Unit $opponet)
    {
        
           return  "{$attacker->name} ataca con la espada a {$opponet->getName()}";
      
    }

} 
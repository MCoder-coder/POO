<?php
namespace Styde\Weapons;

use Styde\Weapon;

class BasicBow extends Weapon{

    protected $damage = 20;

    public function getDescription(Unit $attacker , Unit $opponet)
    {
        
           return  "{$attacker->name} Dispara una Flecha {$opponet->getName()}";
      
    }
}
<?php
namespace Styde\Armors;

Use Styde\Armor;
class CursedArmor implements Armor
{

    public function abosorbDamage($damage)
    {
        return $damage * 2;
    }

}
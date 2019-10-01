<?php
namespace Styde\Armors;

Use Styde\Armor;

class BronzeArmor implements Armor//implementa de interface armor interfaces abosrbe $damage
{
    public function abosorbDamage($damage)
    {
        return $damage / 2;
    }
}
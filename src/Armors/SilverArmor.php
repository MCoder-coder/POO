<?php
namespace Styde\Armors;
Use Styde\Armor;

class SilverArmor implements Armor
{
    public function abosorbDamage($damage)
    {
        return $damage / 3;//divide el daño en tres
    }
}
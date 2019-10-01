<?php

namespace Styde;


require '../vendor/autoload.php';
require '../src/helpers.php';






$armor = new Armors\BronzeArmor();

$ramm = new Soldier('Ramm' , new Weapons\BasicBow);

$silence = new Archer('silence' ,  new Weapons\BasicBow);

$silence->attack($ramm);

$ramm->setArmor($armor);

$ramm->setArmor(new Armors\CursedArmor);

$silence->attack($ramm);

$ramm->attack(($silence));

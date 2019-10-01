<?php

namespace Styde;

//abstract  Las clases definidas como abstractas no se pueden instanciar y cualquier clase que contiene al menos un método abstracto debe ser definida como tal. Los métodos definidos como abstractos simplemente declaran la firma del método, pero no pueden definir la implementación.
abstract class Unit
{

    //protected $alive = true; //boleano si esta vivo o muerto la unidad
    protected $hp = 40;
    protected $name; // nombre de usuarios atributo
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon) //valor de asignacion del atributo $name(es un parametro)

    {

        $this->weapon = $weapon;

        
        $this->name = $name; ///this-> name : es el atributo protegido con $name con this selecciono el atributo hago referencia
    }



    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }


    public function gethp()
    { //setter solo lecutura de hp
        return $this->hp;
    }
    public function getName()
    {
        return $this->name; ///this-> name : es el atributo protegido con $name con this selecciono el atributo hago referencia
    }

    public function move($direction) //parametro

    {
        show("{$this->name} avanza hacia $direction");
    }

    public function attack(Unit $opponet){

       show($this->weapon->getDescription($this , $opponet)) ;
       
        
        $opponet->takeDamage($this->weapon->getDamage());
    }

    public function takeDamage($damage) //funcion que toma daño

    {

        $this->hp = $this->hp - $this->abosorbDamage($damage); //hace referencia al hp del personale y lo  resta haciendo referencia al abosrDamage

        show("{$this->name} ahora tiene {$this->hp} puntos de vida "); //muestra el nombre y lo punto de hp del personaje

        if ($this->hp <= 0) { //si los puntos de vida es igual a cero el personaje muere

            $this->die();
        }
    }

    function die() //funcion muerte del personaje
    {
        show("{$this->name} muere");

        exit(); //sale de la funcion
    }

    protected function abosorbDamage($damage) //funcion abosorbe daño

    {
        return $damage; //retorna el parametro
    }

    

}


?>
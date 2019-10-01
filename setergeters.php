<?php

/*con las flechas (->) accedemos a las propiedad o varibles de la Clase */
// metodo _construct : Construye un objeto iterador
// clase es una plantilla, plano de un objeto; una clase contiene atributos y metodos
//$this para referirnos $ this .  se usa principalmente para referirse a las propiedades de una clase
// geter y setter :Los métodos getters son aquellos que nos devuelven los valores de las propiedades. Por lo general estos métodos no reciben parámetros y deben devolver algo, osea tener un return. Si bien cada uno de estos métodos suele crearse para devolver el valor de una sola propiedad
//seter no sirven para modificar la propiedad

class Person
{
    private $firstName;
    private $lastName;
    public $nickname;
    protected $changNickname=0;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
     * Get the value of firstName informacion de una propiedad
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of nickname
     *
     * @return  self
     */
    public function setNickname($nickname) //seter modifico la informacion

    {
        if($this->changNickname >= 2){
            throw new Exception(('no puede cambiar el nick mas de dos veces '));
            
        }
        $this->nickname = $nickname;

        $this->changNickname++;
    }

    /**
     * Get the value of nickname
     */
    public function getNickname() //geter leo la informacion

    {
        return $this->nickname;
    }
}

$person1 = new Person('jesus', 'reeb');

$person1->setNickname('leonidas') ;
$person1->setNickname('leonidas') ;
$person1->setNickname('leonidas') ;
$person1->setNickname('manuel') ;

exit($person1->nickname);

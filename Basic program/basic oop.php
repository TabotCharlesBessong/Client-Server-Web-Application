<?php

abstract class Fruit { 

    private $color; 

    

    abstract public function eat(); 

    

    public function setColor($c) { 

        $this->color = $c; 

    } 

} 

class Apple extends Fruit {

    public function eat() {

        echo "Omnomnom";

    }

}

$obj = new Apple();

$obj->eat();

class Animal {

    public $name;

    public function hi() {

        echo "Hi from Animal";

    }

}

class Dog extends Animal {

}

$d = new Dog();

$d->hi();

class Person {

    public $name;

    public $age;

    public function __construct($name, $age) {

        $this->name = $name;

        $this->age = $age;

    }

}

$p = new Person("David", 42);

echo $p->name;

?>

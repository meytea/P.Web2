<?php 
    class Animal {
        protected $name;


        public function __construct($name) {
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }

    class Dog extends Animal {
        public function makeSound(){
            return "Woof!";
        }
    }

    class Cat extends Animal {
        public function makeSound(){
            return "Meow!";
        }
    }

    $dog = new Dog("Buddy");
    echo $dog->getName() . " says " . $dog->makeSound();

    echo "<br>";

    $cat = new Cat ("kitty");
    echo $cat->getName() . " says " . $cat->makeSound();
?>
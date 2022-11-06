<?php
/* ---------- Object Oriented Programming ------*/

/*
From PHP5 onwards you can write php in either a procedural
or object oriented way. OOp consists of classes tha can
hold "prpperties" and "methods". object can be created 
from classes
*/

class User {
    //Properties are attributes that belong to a class

    // Access Modifiers: public, private, protected
    // public - can be accesed from anywhere
    // private - can only be accessed from inside the class
    //protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //Method is a function that belong to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

//Instantiate a user object
$user1 = new User('Ibrahim', 'ibrahim@gmail.com', '8846583');
$user2 = new User('Abiola', 'Abiola@gmail.com', 'ggfjdgfkg');

// echo $user1->name;
// echo $user2->email;


// Inheritance

class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }

}

$employee1 = new Employee('Lukmon', 'lukmon@gmail.com', 'jghhhg',
'Director');

echo $employee1->get_title();


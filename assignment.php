<!--  Task 1: HTML Basics -->

<form action="">
    <div>
        <label for="name">Name</label>
        <input id="name" name="name" type="text">
    </div>
    <div>
        <label for="email">Email</label>
        <input id="email" name="email" type="email">
    </div>

    <input type="submit" value="Submit">
</form>




<?php

// Task 2: Basic OOP in PHP 

class Person
{
    private $name;
    private $email;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}


$person = new Person();
$person->setName("Md Shijan Ali");
$person->setEmail("shijan@gmail.com");

echo "Name: " . $person->getName() . "\n";
echo "Email: " . $person->getEmail() . "\n";







// Task 3: Superglobal Variables in PHP


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create new Person 
    $person = new Person();

    // Set name and email properties
    $person->setName($name);
    $person->setEmail($email);

    // Display properties on webpage
    echo "Name: " . $person->getName() . "\n";
    echo "Email: " . $person->getEmail() . "\n";
}

















?>
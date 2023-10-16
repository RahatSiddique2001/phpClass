<?php

class Customer
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($id, $firstName, $lastName, $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __toString()
    {
        return "Customer ID: {$this->id}, Name: {$this->firstName} {$this->lastName}, Email: {$this->email}";
    }

    public function __call($name, $arguments)
    {
        $action = substr($name, 0, 3);
        $property = lcfirst(substr($name, 3));
        
        if ($action === "get") {
            return $this->$property;
        } elseif ($action === "set") {
            $this->$property = $arguments[0];
        }
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }
}
?>

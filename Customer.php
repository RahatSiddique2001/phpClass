<?php
class Customer {
    private $id;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($id, $firstName, $lastName, $email) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __toString() {
        return "<p>ID: {$this->id}</p>
                <p>Name: {$this->firstName} {$this->lastName}</p>
                <p>Email: {$this->email}</p>";
    }
}
?>
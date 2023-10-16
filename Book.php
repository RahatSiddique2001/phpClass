<?php

class Book
{
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct($isbn, $title, $author, $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function addCopy($num)
    {
        if ($num > 0) {
            $this->available += $num;
            return true;
        } else {
            return false;
        }
    }

    public function getCopy()
    {
        if ($this->available > 0) {
            $this->available--;
            return true;
        } else {
            return false;
        }
    }

    public function __toString()
    {
        return "ISBN: {$this->isbn}, Title: {$this->title}, Author: {$this->author}, Available Copies: {$this->available}";
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

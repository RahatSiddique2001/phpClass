<?php
class Book {
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct($isbn, $title, $author, $available) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
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

    public function getCopy() {
        return $this->available > 0;
    }

    public function addCopy($num) {
        if ($num > 0) {
            $this->available += $num;
            return true;
        }
        return false;
    }

    public function __toString() {
        return "<tr>
                    <td>{$this->isbn}</td>
                    <td>{$this->title}</td>
                    <td>{$this->author}</td>
                    <td>{$this->available}</td>
                </tr>";
    }
}
?>

<?php
require_once 'Book.php';
require_once 'Customer.php';

$book = new Book(123456789, "Sample Book", "John Doe", 5);

$book->addCopy(3);

$customer = new Customer(1, "Alice", "Johnson", "alice@example.com");

echo "Book Details:\n";
echo $book . "\n";
echo "Customer Details:\n";
echo $customer . "\n";

?>
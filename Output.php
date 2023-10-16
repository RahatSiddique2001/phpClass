<?php

require_once 'Book.php';
require_once 'Customer.php';

$book1 = new Book(123456789, "Sample Book 1", "John Doe", 5);
$book2 = new Book(987654321, "Sample Book 2", "Jane Smith", 3);
$book3 = new Book(555555555, "Another Book", "Alice Johnson", 10);
$book4 = new Book(999999999, "Mystery Book", "Bob Anderson", 7);

$book2->addCopy(2);
$book4->addCopy(5);

$customer = new Customer(1, "Alice", "Johnson", "alice@example.com");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Book and Customer Details</title>
</head>
<body>
    <h1>Book Details</h1>
    <table border="1">
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Available Copies</th>
        </tr>
        <?= $book1 ?>
        <?= $book2 ?>
        <?= $book3 ?>
        <?= $book4 ?>
    </table>

    <h1>Customer Details</h1>
    <?= $customer ?>
</body>
</html>

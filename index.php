<?php require_once ('vendor/autoload.php');

use Proto\Book;
use Proto\Movie;

echo '<pre>';
$book = new Book('Dunno', 19.99, 'Nikolay Nosov');
$book->setNumberOfPages (171);
$movie = new Movie('Django Unchained', '4.99', 'Quentin Tarantino');
$movie->setRuntime ('165 mins');
print_r ($book);
print_r ($movie);

$another_book = clone $book;
$another_book->setTitle ('Les Misrables');
$another_book->setPrice ('14.99');
$another_book->setAuthor ('Victor Hugo');
$another_book->setNumberOfPages (1900);
print_r ($another_book);


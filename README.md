#Prototype Design Pattern in PHP

Let's assume that you have similar objects with similar parameters and methods.
What can we image? Let's image that we are selling books and movies. What is
common among them? title? price? author? All of them. 

So, we move all common things into an abstract class called Item
(you can call it anything you want). We also specify magic method __clone() 
to ensure that we allow any properties that need to be changed.
Then we create objects, in this demo, I have created Book and Movie objects in 
index.php file:

    $book = new Book('Dunno', 19.99, 'Nikolay Nosov');

Set the number of pages:

    $book->setNumberOfPages (171);

Movie:

    $movie = new Movie('Django Unchained', '4.99', 'Quentin Tarantino');

Setting runtime:

    $movie->setRuntime ('165 mins');

Then:

    print_r ($book);
    print_r ($movie);  

Result:

    Proto\Book Object 
    (
        [numberOfPages:Proto\Book:private] => 171
        [title:Proto\Item:private] => Dunno
        [price:Proto\Item:private] => 19.99
        [author:Proto\Item:private] => Nikolay Nosov
    )

    Proto\Movie Object
    (
        [runtime:Proto\Movie:private] => 165 mins
        [title:Proto\Item:private] => Django Unchained
        [price:Proto\Item:private] => 4.99
        [author:Proto\Item:private] => Quentin Tarantino
    )

Later:

We clone book object that we created earlier

    $another_book = clone $book;
We make adjustments:

    $another_book->setTitle ('Les Misrables');
    $another_book->setPrice ('14.99');
    $another_book->setAuthor ('Victor Hugo');

we set number of pages:

    $another_book->setNumberOfPages (1900);

check the new object:

    print_r ($another_book);

Here is the result:
    
    Proto\Book Object
    (
        [numberOfPages:Proto\Book:private] => 1900
        [title:Proto\Item:private] => Les Misrables
        [price:Proto\Item:private] => 14.99
        [author:Proto\Item:private] => Victor Hugo
    )


We can actually create a lot of them without using design pattern. Just loop and
create but there are a lot of downsides of this. Objects use a lot of memory, 
each time you create an object it takes a memory on your resources. Then, it is
good idea to clone the already created object rather than create a new one, which
will help us to save a lot of memory on the server.


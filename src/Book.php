<?php

namespace Proto;


class Book extends Item
{
    private $numberOfPages;

    public function __construct($title, $price, $author)
    {
        $this->setTitle ($title);
        $this->setPrice ($price);
        $this->setAuthor ($author);
    }

    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    public function setNumberOfPages($numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;
    }


    function __clone()
    {

    }
}
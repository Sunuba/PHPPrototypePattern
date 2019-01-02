<?php

namespace Proto;


class Movie extends Item
{
    private $runtime;

    public function __construct($title, $price, $author)
    {
        $this->setTitle ($title);
        $this->setPrice ($price);
        $this->setAuthor ($author);
    }

    public function getRuntime()
    {
        return $this->runtime;
    }

    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
    }

    function __clone()
    {
    }
}
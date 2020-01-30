<?php

class Book
{
    private $bookName = null;
    private $bookLocation = null;
    private $bookCheck = true;

    public function __construct(string $bookName, string $bookLocation)
    {
        $this->bookName = $bookName;
        $this->bookLocation = $bookLocation;
    }

    public function moveBookLocation(string $bookLocation)
    {
        $this->bookLocation = $bookLocation;
    }

    public function setBookCheck(bool $bookCheck)
    {
        $this->bookCheck = $bookCheck;
    }

    public function getBookName()
    {
        return $this->bookName;
    }

    public function getBookLocation()
    {
        return $this->bookLocation;
    }

    public function getBookCheck()
    {
        return $this->bookCheck;
    }
}

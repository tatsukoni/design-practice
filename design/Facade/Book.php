<?php

class Book
{
    public $bookName = null;
    public $bookLocation = null;
    public $bookCheck = true;

    public function __construct(string $bookName, string $bookLocation)
    {
        $this->bookName = $bookName;
        $this->bookLocation = $bookLocation;
    }

    protected function moveBookLocation(string $bookLocation)
    {
        $this->bookLocation = $bookLocation;
    }

    protected function setBookCheck(bool $bookCheck)
    {
        $this->bookCheck = $bookCheck;
    }
}

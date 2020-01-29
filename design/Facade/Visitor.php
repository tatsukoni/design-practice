<?php
require_once 'Librarian.php';

class Visitor
{
    public function searchBookLocation(Librarian $librarian, string $bookName)
    {
        return $librarian->searchBookLocation($bookName);
    }

    public function searchBookCheck(Librarian $librarian, string $bookName)
    {
        return $librarian->searchBookCheck($bookName);
    }
}

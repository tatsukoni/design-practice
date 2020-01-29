<?php
require_once 'Book.php';

class BookList
{
    public $bookLists = [];

    public function addBookList(Book $book)
    {
        $this->bookLists[] = $book;
    }

    public function searchBook(string $bookName)
    {
        foreach ($this->bookLists as $book) {
            if ($book->bookName === $bookName) {
                return $book;
            }
        }
        // 存在しない場合
        return false;
    }
}

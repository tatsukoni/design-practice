<?php
require_once 'Book.php';
require_once 'BookList.php';

class Librarian
{
    private $bookList;

    public function __construct()
    {
        $this->bookList = new BookList();
    }

    public function setBook(string $bookName, string $bookLocation)
    {
        $book = new Book($bookName, $bookLocation);
        $this->bookList->addBookList($book);
    }

    public function searchBookLocation(string $bookName)
    {
        if (! $this->getBookInfo($bookName)) {
            return '該当の書籍は見つかりませんでした。';
        } else {
            return '本の場所は' . $this->getBookInfo($bookName)->getBookLocation() . 'です。';
        }
    }

    public function searchBookCheck(string $bookName)
    {
        $bookInfo = $this->getBookInfo($bookName);
        if (! $bookInfo) {
            return '該当の書籍は見つかりませんでした。';
        }
        // 貸し出されているかどうか
        if ($bookInfo->getBookCheck()) {
            return '該当の書籍は貸出可能です。';
        } else {
            return '該当の書籍は貸出不可です。';
        }
    }

    private function getBookInfo(string $bookName)
    {
        return $this->bookList->searchBook($bookName);
    }
}

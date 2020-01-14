<?php

require_once 'MyStudentList.php';
require_once 'Iterator.php';

class MyStudentIterator implements Iterator
{
    private $myStudentList;
    private $index = 0;

    public function __construct()
    {
        $this->myStudentList = new MyStudentList();
    }

    public function hasNext(): bool
    {
        if ($this->myStudentList->getLastNum() >= $this->index) {
            return false;
        } else {
            return true;
        }
    }

    public function next()
    {
        $student = $this->myStudentList->getStudentAt($this->index);
        $this->index++;
        return $student;
    }
}

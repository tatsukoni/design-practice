<?php

require_once 'MyStudentIterator.php';
require_once 'StudentList.php';
require_once 'Aggregate.php';

class MyStudentList extends StudentList implements Aggregate
{
    public function iterator()
    {
        return new MyStudentIterator();
    }
}

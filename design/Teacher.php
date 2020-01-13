<?php
require_once 'StudentList.php';

abstract class Teacher
{
    protected $studentList;
 
    public abstract function createStudentList();

    public abstract function callStudents();
}

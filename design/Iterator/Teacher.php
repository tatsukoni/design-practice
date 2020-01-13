<?php

abstract class Teacher
{
    protected $studentList;

    protected abstract function createStudentList();

    protected abstract function callStudents();
}

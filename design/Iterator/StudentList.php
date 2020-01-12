<?php
require_once 'Student.php';

class StudentList
{
    private $students = [];
    private $last = 0;

    public function __construct(int $studentCount)
    {
        //
    }

    public function add(Student $student)
    {
        $this->students[$last] = $student;
        $this->last++;
    }

    public function getStudentAt(int $index)
    {
        return $this->students[$index];
    }

    public function getLastNum(): int
    {
        return $this->last;
    }
}
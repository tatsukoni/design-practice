<?php

require_once 'Teacher.php';
require_once 'Student.php';
require_once 'StudentList.php';

class MyTeacher extends Teacher
{
    private $studentList;
    private $studentArrays;

    public function __construct(Array $studentArrays)
    {
        $this->studentArrays = $studentArrays;
    }

    private function getStudentList()
    {
        $this->studentList = new StudentList();
    }

    public function createStudentList()
    {
        $this->getStudentList();

        foreach ($this->studentArrays as $studentArray) {
            $student = new Student($studentArray['name'], $studentArray['sex']);
            $this->studentList->add($student);
        }
    }

    public function callStudents()
    {
        for ($index = 0; $index < $this->studentList->last; $index++) {
            return $this->students[$index]->getName() . $this->students[$index]->getSex();
        }
    }
}

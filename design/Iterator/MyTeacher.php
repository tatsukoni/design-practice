<?php

require_once 'Teacher.php';
require_once 'Student.php';
require_once 'MyStudentList.php';

class MyTeacher extends Teacher
{
    private $studentList;
    private $studentArrays;

    public function __construct(Array $studentArrays)
    {
        $this->studentArrays = $studentArrays;
        $this->studentList = new MyStudentList();
    }

    public function createStudentList()
    {
        foreach ($this->studentArrays as $studentArray) {
            $student = new Student($studentArray['name'], $studentArray['sex']);
            $this->studentList->add($student);
        }
    }

    /**
     * 集約体（StudentList.php）に依存したコードをなくす
     */
    public function callStudents()
    {
        $iterator = $this->studentList->iterator();
        while ($iterator->hasNext()) {
            $iterator->next()->getName();
        }
    }
}

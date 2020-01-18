<?php
require_once 'Hanako.php';

class Teacher
{
    public function main()
    {
        $chairperson = new Hanako();
        $chairperson.organizeClass();
    }
}

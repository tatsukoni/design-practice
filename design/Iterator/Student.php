<?php

class Student
{
    private $name;
    private $sex;

    public function __construct(string $name, int $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSex()
    {
        return $this->sex;
    }
}

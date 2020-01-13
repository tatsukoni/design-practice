<?php
require_once 'MyTeacher.php';

class Main
{
    public function main()
    {
        $you = new MyTeacher($studentArray);
        $you.createStudentList();
        $you.callStudents();
    }
}

$studentArray = [
    [
        'name' => '赤井亮太', 
        'sex' => 1
    ],
    [
        'name' => '赤羽里美',
        'sex' => 2
    ],
    [
        'name' => '岡田美央',
        'sex' => 2
    ],
    [
        'name' => '西森俊介',
        'sex' => 1
    ],
    [
        'name' => '中ノ森玲菜',
        'sex' => 2
    ]
];

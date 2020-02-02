<?php
require_once 'TaskController.php';

$jaTaskController = new TaskController('ja');
echo $jaTaskController->getTotalPrice(100, 100, '食料品');

$usTaskController = new TaskController('us');
echo $usTaskController->getTotalPrice(100, 100, '日用品');

$canTaskController = new TaskController('can');
echo $canTaskController->getTotalPrice(100, 100, 'その他');

$undefinedTaskController = new TaskController('hoge');
echo $undefinedTaskController->getTotalPrice(100, 100, '食料品');

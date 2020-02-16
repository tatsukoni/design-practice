<?php
require_once 'Client.php';

$client1 = new Client('Rectangle', 1);
$handleArray = [
    'x1' => 1,
    'y1' => 1,
    'x2' => 1,
    'y2' => 5
];
$client1->handle($handleArray);

$client2 = new Client('Circle', 1);
$handleArray = [
    'x1' => 2,
    'y1' => 2,
    'r' => 3
];
$client2->handle($handleArray);

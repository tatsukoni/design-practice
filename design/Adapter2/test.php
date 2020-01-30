<?php
require_once 'Client.php';
require_once 'Square.php';
require_once 'Triangle.php';
require_once 'Circle.php';

// 各図形を作成する
$square = new Square(10, 5);
$triangle = new Triangle(10, 5);
$circle = new Circle(10);

$client = new Client();

// 各図形の面積を表示する
echo $client->showAreaSize($square); // 四角形
echo $client->showAreaSize($triangle); // 三角形
echo $client->showAreaSize($circle); // 円

// 各図形の座標情報を表示する
echo $client->display($square); // 四角形
echo $client->display($triangle); // 三角形
echo $client->display($circle); // 円

<?php
require_once 'Visitor.php';
require_once 'Nakamura.php';

// 中村くん
$nakamura = new Nakamura();

// 中村くんの仕事：本の整理
$nakamura->setBook('昆虫図鑑', 'Aブロック');

// 中村くんに、蔵書を尋ねる（中村くんが窓口となる）
$visitor = new Visitor();
echo $visitor->searchBookLocation($nakamura, '昆虫図鑑');

// 中村くんに、蔵書が貸出可能か尋ねる
echo $visitor->searchBookCheck($nakamura, '昆虫図鑑');

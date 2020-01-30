<?php
require_once 'Shape.php';

class Client
{
    public function showAreaSize(Shape $shape)
    {
        return $shape->getShapeName() . 'の面積は' . $shape->getArea();
    }

    public function display(Shape $shape)
    {
        $tateziku = $shape->getLocation()[0];
        $yokoziku = $shape->getLocation()[1];
        return '縦軸:' . $tateziku .  ' 横軸:' . $yokoziku;
    }
}

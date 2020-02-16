<?php

class Circle extends Shape
{
    protected $x1;
    protected $y1;
    protected $r;

    const NEED_COORDINATES = [
        'x1',
        'y1',
        'r'
    ];

    public function setCoordinates(array $coordinates)
    {
        // 引数チェック
        $this->checkCoordinate($coordinates, self::NEED_COORDINATES);

        $this->x1 = $coordinates['x1'];
        $this->y1 = $coordinates['y1'];
        $this->r = $coordinates['r'];
    }

    public function draw()
    {
        return $this->drawCircle($this->x1, $this->y1, $this->r);
    }
}
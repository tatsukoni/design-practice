<?php
require_once 'Shape.php';

class Rectangle extends Shape
{
    protected $x1;
    protected $y1;
    protected $x2;
    protected $y2;

    const NEED_COORDINATES = [
        'x1',
        'y1',
        'x2',
        'y2'
    ];

    public function setCoordinates(array $coordinates)
    {
        // 引数チェック
        $this->checkCoordinate($coordinates, self::NEED_COORDINATES);

        $this->x1 = $coordinates['x1'];
        $this->y1 = $coordinates['y1'];
        $this->x2 = $coordinates['x2'];
        $this->y2 = $coordinates['y2'];
    }

    public function draw()
    {
        $rectangle = '';

        $rectangle .= $this->drawLine($this->x1, $this->y1, $this->x2, $this->y1);
        $rectangle .= $this->drawLine($this->x2, $this->y1, $this->x2, $this->y2);
        $rectangle .= $this->drawLine($this->x2, $this->y2, $this->x1, $this->y1);
        $rectangle .= $this->drawLine($this->x1, $this->y2, $this->x2, $this->y1);

        return $rectangle;
    }
}

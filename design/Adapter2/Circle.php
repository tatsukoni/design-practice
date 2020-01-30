<?php
require_once 'Shape.php';
require_once 'OldCircle.php';

class Circle implements Shape
{
    const SHAPE_NAME = '円';

    private $oldCircle;

    public function __construct(int $length)
    {
        $this->oldCircle = new OldCircle($length);
    }

    public function getArea(): int
    {
        return $this->oldCircle->getArea1();
    }

    public function getLocation(): array
    {
        return
        [
            $this->oldCircle->getHeigthLocation(),
            $this->oldCircle->getLengthLocation()
        ];
    }

    public function getShapeName(): string
    {
        return self::SHAPE_NAME;
    }
}

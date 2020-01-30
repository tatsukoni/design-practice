<?php
require_once 'Shape.php';

class Square implements Shape
{
    const SHAPE_NAME = '四角形';

    private $height;
    private $length;

    public function __construct(int $height, int $length)
    {
        $this->height = $height;
        $this->length = $length;
    }

    public function getArea(): int
    {
        return $this->height * $this->length;
    }

    public function getLocation(): array
    {
        return
        [
            $this->height / 2,
            $this->length / 2
        ];
    }

    public function getShapeName(): string
    {
        return self::SHAPE_NAME;
    }
}

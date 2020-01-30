<?php

class OldCircle
{
    const PI = 3.14;

    private $length;
    private $separateLength;

    public function __construct(int $length)
    {
        $this->length = $length;
        $this->separateLength = $length / 2;
    }

    public function getArea1(): int
    {
        return $this->separateLength * $this->separateLength * self::PI;
    }

    public function getHeigthLocation(): int
    {
        return $this->separateLength;
    }

    public function getLengthLocation(): int
    {
        return $this->separateLength;
    }
}

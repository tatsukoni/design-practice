<?php

abstract class Drawing
{
    public abstract function drawLine(int $x1, int $y1, int $x2, int $y2);

    public abstract function drawCircle(int $x1, int $y1, int $r);
}

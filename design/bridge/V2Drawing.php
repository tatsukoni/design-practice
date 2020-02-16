<?php
require_once 'DP2.php';

class V2Drawing extends Drawing
{
    private $dp2;

    public function __construct()
    {
        $this->dp2 = new DP2();
    }

    public function drawLine(int $x1, int $y1, int $x2, int $y2)
    {
        return $this->dp2->draw_a_line2($x1, $y1, $x2, $y2);
    }

    public function drawCircle(int $x1, int $y1, int $r)
    {
        return $this->dp2->draw_a_circle2($x1, $y1, $r);
    }
}

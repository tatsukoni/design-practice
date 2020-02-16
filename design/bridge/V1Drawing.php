<?php
require_once 'DP1.php';

class V1Drawing extends Drawing
{
    private $dp1;

    public function __construct()
    {
        $this->dp1 = new DP1();
    }

    public function drawLine(int $x1, int $y1, int $x2, int $y2)
    {
        return $this->dp1->draw_a_line($x1, $y1, $x2, $y2);
    }

    public function drawCircle(int $x1, int $y1, int $r)
    {
        return $this->dp1->draw_a_circle($x1, $y1, $r);
    }
}

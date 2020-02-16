<?php

class DP2
{
    public function draw_a_line2(int $x1, int $y1, int $x2, int $y2)
    { 
        if ($x1 === $x2) {
            return $this->draw_y_line($y1, $y2);
        } elseif ($y1 === $y2) {
            return $this->draw_x_line($x1, $x2);
        } else {
            throw new Exception('斜線には未対応です');
        }
    }

    private function draw_x_line(int $x1, int $x2): string
    {
        $resultLine;
        for ($index = 0; $index < abs($x2 - $x1) * 2; $index++) {
            $resultLine .= '_';
        }

        return $resultLine;
    }

    private function draw_y_line(int $y1, int $y2): string
    {
        $resultLine;
        for ($index = 0; $index < abs($y2 - $y1) * 2; $index++) {
            $resultLine .= '|';
            $resultLine .= "\n";
        }

        return $resultLine;
    }

    public function draw_a_circle2(int $x1, int $y1, int $r)
    {
        return ps_circle(ps_new(), $x1, $y1, $r);
    }
}

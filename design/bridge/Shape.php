<?php
require_once 'Drawing.php';

abstract class Shape
{
    private $drawing;

    public function __construct(Drawing $drawing) // Drawing を保持させる。ただし、この時点では種類はわからない
    {
        $this->drawing = $drawing; // 流動的要素を、カプセル化によって閉じ込める
    }

    protected function drawLine(int $x1, int $y1, int $x2, int $y2) // Shape は、自身の形状に応じた描写方法を知っている責務がある
    {
        return $this->drawing->drawLine($x1, $y1, $x2, $y2);
    }

    protected function drawCircle(int $x1, int $y1, int $r) // Shape は、自身の形状に応じた描写方法を知っている責務がある
    {
        return $this->drawing->drawCircle($x1, $y1, $r);
    }

    public abstract function setCoordinates(array $coordinates);

    // 座標要素の整合性を確認する
    protected function checkCoordinate(array $coordinates, array $needCoordinates)
    {
        // 数を確認
        if (count($coordinates) !== count($needCoordinates)) {
            throw new Exception('座標データの要素数が適切ではありません。');
        }

        // 中身を確認
        foreach ($needCoordinates as $needCoordinate) {
            if (! array_key_exists($needCoordinate, $coordinates)) {
                throw new Exception('座標データの中身が適切ではありません。');
            }
        }
    }

    protected abstract function draw();
}

<?php
require_once 'Shape.php';
require_once 'Drawing.php';
require_once 'Rectangle.php';
require_once 'Circle.php';
require_once 'V1Drawing.php';
require_once 'V2Drawing.php';

class Client
{
    private $shape;
    private $drawing;

    public function __construct(string $kind, int $ver)
    {
        $this->drawing = $this->getDrawing($ver);
        $this->shape = $this->getShape($kind, $this->drawing);
    }

    public function handle(array $coordinates)
    {
        try {
            // 座標をセット
            $this->shape->setCoordinates($coordinates);
            // 描写を実行
            echo $this->shape->draw();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    private function getShape(string $kind, Drawing $drawing)
    {
        if ($kind === 'Rectangle') {
            return new Rectangle($drawing);
        } elseif ($kind === 'Circle') {
            return new Circle($drawing);
        } else {
            throw new Exception('サポート外の図形です。');
        }
    }

    private function getDrawing(int $ver)
    {
        if ($ver === 1) {
            return new V1Drawing();
        } elseif ($ver === 2) {
            return new V2Drawing();
        } else {
            throw new Exception('サポート外のバージョンです。');
        }
    }
}

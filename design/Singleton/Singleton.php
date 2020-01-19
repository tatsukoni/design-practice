<?php

class Singleton
{
    private $name;
    private static $setInstance = false;

    private function __construct(string $name)
    {
        $this->name = $name;
        self::$setInstance = true;
    }

    public static function getInstance(string $name)
    {
        if (self::$setInstance) {
            return 'インスタンスは定義済みです';
        }

        return new self($name);
    }

    public function getName()
    {
        return $this->name;
    }
}

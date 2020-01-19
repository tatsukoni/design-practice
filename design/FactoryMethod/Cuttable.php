<?php

class Cuttable
{
    protected $object;

    public function __construct($object)
    {
        $this->object = $object;
    }

    public function create()
    {
        return $this->object;
    }
}

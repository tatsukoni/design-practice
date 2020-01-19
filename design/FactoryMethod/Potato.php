<?php
require_once 'Cuttable.php';

class Potato extends Cuttable
{
    public function create()
    {
        return $this->object . 'Potato';
    }
}

<?php

interface Shape
{
    function getShapeName(): string;

    function getArea(): int;

    function getLocation(): array;
}

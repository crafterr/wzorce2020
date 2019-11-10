<?php


namespace wzorce\factory\simple;


abstract class CommsManager
{
    abstract public function getHeaderText(): string;

    abstract public function getApptEncoder();

    abstract public function getFooterText(): string;
}
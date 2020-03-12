<?php


namespace wzorce\strategy\duck\strategy;


interface IDisplayBehavior {
  public function display(): string;
}
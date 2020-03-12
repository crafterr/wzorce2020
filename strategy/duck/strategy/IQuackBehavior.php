<?php
namespace wzorce\strategy\duck\strategy;

interface IQuackBehavior {
  public function quack(): string;
}
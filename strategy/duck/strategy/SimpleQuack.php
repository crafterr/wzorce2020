<?php


namespace wzorce\strategy\duck\strategy;


class SimpleQuack implements IQuackBehavior {

  public function quack(): string {
    return "quack quack\n";
  }

}
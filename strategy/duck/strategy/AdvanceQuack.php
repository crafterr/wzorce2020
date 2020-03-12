<?php


namespace wzorce\strategy\duck\strategy;


class AdvanceQuack implements IQuackBehavior {

  public function quack(): string {
    $string = '';
    for ($i=0; $i<=10; $i++) {
      $string.='Quack ';
    }
    return "$string\n";
  }

}
<?php


namespace wzorce\strategy\duck\strategy;


class FastFly implements IFlyBehavior {

  public function fly(): string {
    return "Szybko latam\n";
  }

}
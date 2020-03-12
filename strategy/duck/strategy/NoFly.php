<?php


namespace wzorce\strategy\duck\strategy;


class NoFly implements IFlyBehavior {

  public function fly(): string {
    return "Ja nie latam wogole\n";
  }

}
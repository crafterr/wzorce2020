<?php


namespace wzorce\strategy\duck\strategy;


class SimpleDisplay implements IDisplayBehavior {

  public function display(): string {
    return "proste wyswietlenie kaczki\n";
  }

}
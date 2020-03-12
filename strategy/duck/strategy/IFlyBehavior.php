<?php


namespace wzorce\strategy\duck\strategy;


interface IFlyBehavior {
  public function fly(): string;
}
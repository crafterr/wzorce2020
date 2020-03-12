<?php


namespace wzorce\strategy\duck\strategy;


interface IBehavior {

  /**
   * @return string
   */
  public function display(): string;

  /**
   * @return string
   */
  public function fly(): string;

  /**
   * @return string
   */
  public function quack(): string;
}
<?php


namespace wzorce\strategy\duck\strategy;


abstract class Duck implements IBehavior {

  /**
   * @var \wzorce\strategy\duck\strategy\IDisplayBehavior $iDisplayBehavior
   */
  private $iDisplayBehavior;

  /**
   * @var \wzorce\strategy\duck\strategy\IFlyBehavior $iFlyBehavior
   */
  private $iFlyBehavior;

  /**
   * @var \wzorce\strategy\duck\strategy\IQuackBehavior $iQuackBehavior
   */
  private $iQuackBehavior;

  /**
   * Duck constructor.
   *
   * @param \wzorce\strategy\duck\strategy\IDisplayBehavior $iDisplayBehavior
   * @param \wzorce\strategy\duck\strategy\IFlyBehavior $iFlyBehavior
   * @param \wzorce\strategy\duck\strategy\IQuackBehavior $iQuackBehavior
   */
  public function __construct(IDisplayBehavior $iDisplayBehavior, IFlyBehavior $iFlyBehavior, IQuackBehavior $iQuackBehavior) {
    $this->iDisplayBehavior = $iDisplayBehavior;
    $this->iFlyBehavior = $iFlyBehavior;
    $this->iQuackBehavior = $iQuackBehavior;
  }

  /**
   * @inheritDoc
   */
  public function display():string {
    return $this->iDisplayBehavior->display();
  }

  /**
   * @inheritDoc
   */
  public function fly():string {
    return $this->iFlyBehavior->fly();
  }

  /**
   * @inheritDoc
   */
  public function quack():string {
    return $this->iQuackBehavior->quack();
  }


}
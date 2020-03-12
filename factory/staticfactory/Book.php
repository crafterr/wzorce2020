<?php

namespace wzorce\factory\staticfactory;

/**
 * Class Book
 *
 * @package wzorce\factory\staticfactory
 */
class Book {

  /**
   * @var string
   *   name of book
   */
  protected $name;

  /**
   * @var string
   *   name of author
   */
  protected $author;

  /**
   * Book constructor.
   *
   * @param string $name
   *   name book
   * @param string $author
   *   author book
   */
  public function __construct(string $name, string $author) {
    $this->name = $name;
    $this->author = $author;
  }

  /**
   * @return string
   *   concatenation name and author
   */
  public function toString() {
    return $this->name . ' ' . $this->author;
  }

}

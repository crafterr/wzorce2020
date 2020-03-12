<?php


namespace wzorce\factory\staticfactory;

/**
 * Class BookFactory
 *
 * @package wzorce\factory\staticfactory
 */
class BookFactory {

  /**
   * @param string $name
   * @param string $author
   *
   * @return \wzorce\factory\staticfactory\Book
   */
  public static function create(string $name, string $author) {
    return new Book($name, $author);
  }

}

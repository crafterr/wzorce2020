<?php

require __DIR__ . '/../../vendor/autoload.php';
$files = scandir(__DIR__.'/images');
$files = array_diff($files,['..','.']);
$files = array_values($files);
$movies = [];
function transfer($string) {
  $movie_names = substr($string, 0 , (strrpos($string, ".")));
  $movie_names = str_replace(' ','_',$movie_names);
  $movie_names = str_replace('-','_',$movie_names);
  $movie_names = ucfirst($movie_names);
  return $movie_names;
}
for ($i = 0; $i<count($files); $i++) {

  $movie_names = transfer($files[$i]);
  $movies[$movie_names]['file_name'] = $files[$i];
  $movies[$movie_names]['name'] = $movie_names;
}
dump($movies);

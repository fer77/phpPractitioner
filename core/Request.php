<?php

class Request //* Fetches information about the current browser request.
{

  public static function uri()
  {
    // This specifies what part of the uri we are interested in (Google: parse_url).
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    //return trim($_SERVER['REQUEST_URI'], '/');
  }
  public static function method()
  {
    return $_SERVER['REQUEST_METHOD']; //* this will give us GET or POST
  }
}


 ?>

<?php

//* This is a basic form of a dependency injection container:
//* A place to register/bind dependencies a regestry, like a storage or container.

/**
 *
 */
class App
{
  //* Each time we bind into our application container, it will be stored in here:
  protected static $registry = [
    //* All this is doing is this:
    //* 'config' => [],
    //* 'database' => $queryBuilder
  ];
                        //* Comes from bootstrap.php 'App::bind...'
  public static function bind($key, $value)
  {
    static::$registry[$key] = $value;
  }
                  //* Comes from bootstrap.php 'App::get...'
  public function get($key)
  {
    //* Check if the registry contains the array:
    if(! array_key_exists($key, static::$registry)) {
      throw new Exception("No " . $key . " is bound in the container.");
    }
//* Fetch a value
    return static::$registry[$key];
  }
}


 ?>

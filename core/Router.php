<?php

  class Router
  {
    protected $routes = [];

    public static function load($file)
    //* A static function is not an instance method, it is more of a global mthod that can be called at any time.
    {
      //* This is a way of saying "create a new Router instance" and replacing the 'this' object:
      $router = new static;
      require $file;
      //* Needs to reference 'this' but 'static' methods do not have acces to 'this' object but we created an instance in order to continue chaning:
      return $router;
    }

    public function define($routes)
    {
      $this->routes = $routes;
    }

  public function direct($uri)
  {
    //* example.com/about/culture
    if (array_key_exists($uri, $this->routes)) {
    //* array_key_exists will look through our array of routes and will look for a key that matches.
    return $this->routes[$uri];

    }

    throw new Exception('No route defined for this URI.');

  }
}

 ?>

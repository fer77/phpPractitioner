<?php

  class Router
  {
    public $routes = [
      'GET' => [],
      'POST' => []
    ];

    public static function load($file)
    //* A static function is not an instance method, it is more of a global mthod that can be called at any time.
    {
      //* This is a way of saying "create a new Router instance" and replacing the 'this' object:
      $router = new static;
      require $file;
      //* Needs to reference 'this' but 'static' methods do not have acces to 'this' object but we created an instance in order to continue chaning:
      return $router;
    }

    public function get($uri, $controller)
    {
      $this->routes['GET'][$uri] = $controller; //* is doing this:
      //* $getRoutes = [];
      //* $getRoutes[] = 'foo'; //* When [] is left empty $getRoutes does something like this: 0 => 'foo'.
      //* $getRoutes[] = 'bar'; //* When [] is left empty $getRoutes does something like this: 1 => 'bar'.
      //* $getRoutes['uri'] = 'baz'; //* When [] is left empty $getRoutes does something like this: uri, or name, or date... => 'baz'.
      //* [
      //*   0 => 'foo',
      //*   1 => 'bar',
      //*   'uri' => 'baz'
      //* ]
      //* Ultimatly will be doing something like:
      //* $getRoutes = ['name'] = controllers/foo.php;
    }
    public function post($uri, $controller)
    {
      $this->routes['POST'][$uri] = $controller;
    }

  public function direct($uri, $requestType)
  {
    //* example.com/about/culture
    if (array_key_exists($uri, $this->routes[$requestType])) {
    //* array_key_exists will look through our array of routes and will look for a key that matches.
    return $this->routes[$requestType][$uri];

    }

    throw new Exception('No route defined for this URI.'); //* Error to get if an URI that doesn't exist is typed.

  }
}

 ?>

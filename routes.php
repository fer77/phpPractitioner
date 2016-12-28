<?php
//* Create a router class and a define method that will handle this:
  // $router->define ([
  //   '' => 'controllers/index.php',
  //   'about' => 'controllers/about.php',
  //   'contact' => 'controllers/contact.php',
  //   'about/culture' => 'controllers/about-culture.php',
  //   // When we have a request from 'names' this will load up the data to "controllers/add-name.php"
  //   'names' => 'controllers/add-name.php'
  // ]);


  $router->get('', 'controllers/index.php'); //* This allows us to not be linked to a file name, all we have to do is change the uri and point it to the file we need.
  $router->get('about', 'controllers/about.php');
  $router->get('contact', 'controllers/contact.php');
  $router->get('about/culture', 'controllers/about-culture.php'); // only for GET types.
  $router->post('names', 'controllers/add-name.php'); // only for POST types.

//dd($router->routes);
 ?>

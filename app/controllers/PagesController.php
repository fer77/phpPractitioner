<?php

//* Namespacea:
//* AC/DC => Rock or Bust => Dogs of War
namespace App\Controllers;
//* namespaces should mimic your folder structure.

 //*  A controller is responsible for recieving a request, delegating in some form, and returning a response.
class PagesController
{

  public function home()
  {
    //* Receive the request.
    //* Delegate.
    //* Return a response.
    //die('home'); //* Triggers the controller.
    //$users = App::get('database')->selectAll('users');

    //require 'views/index.view.php';
                          //*compact('users') does the same as ['users => $users']
    return view('index'); //* For this to be accepted add a $data argument to our view function in bootstrap.php.
           //* This view function lives in bootstrap.php.
  }
  public function about()
  {
    //require 'views/about.view.php';
    return view('about');
  }
  public function contact()
  {
    //require 'views/contact.view.php';
    return view('contact');
  }
}


 ?>

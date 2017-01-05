<?php

/**
 *
 */
class UsersController
{

  public function index()
  {
    $users = App::get('database')->selectAll('users');
                          //*compact('users') does the same as ['users => $users']
    return view('users', compact('users'));
  }
  public function store()
  {
    //* Insert the user associated with the request.
    App::get('database')->insert('users', ['name' => $_POST['name']]);

    //* Redirect after done with our query.

    //* And then redirect back to all users.
    //header('Location: /users');
    return redirect('users');
  }
}


 ?>

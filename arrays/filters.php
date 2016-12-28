<?php

class Post
{
  public $title;

  public $published;

  public function __construct($title, $author, $published)
  {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }
}

$posts = [
  new Post('My First Post', 'FF', true),
  new Post('My Second Post', 'DD', true),
  new Post('My Third Post', 'FF', true),
  new Post('My Forth Post', 'DD', false)
];
//var_dump($posts);

//* array_filter: Filters elements of an array using a callback function;
//* array_filter ( $array, callback() )
// $unpublishedPosts = array_filter($posts, function($post) {
//   return ! $post->published; //* Returns posts not published.
// });
// var_dump($unpublishedPosts);

// $publishedPosts = array_filter($posts, function($post) {
//   return $post->published; //* Returns published posts.
// });
// var_dump($publishedPosts);

//* array_map: Applies the callback to the elements of the given arrays (modifies the array);
//* array_map ( callback($array1) {}, $array )
//* i.e.
// $modified = array_map(function($post) {
//   return 'It modified your array';
// }, $posts);
// var_dump($modified);

// $modified = array_map(function($post) {
//   $post->published = true;
//   return $post;
// }, $posts);
// var_dump($modified);

// $posts = array_map(function($post) {
  // return (array) $post;  //* returns a collection of arrays.
  //return ['title' => $post->title]; //* returns post titles without exposing anything else about a post.
// }, $posts);

//* array_column: Return the values from a single column in the input array;
//* array_column ( $array , 'key', 'index_key' )
// $titles = array_column($posts, 'title');
// var_dump($titles);

//If you want to return an array of an array we could do:
 // foreach ($posts as $index => $post) {
 //   $posts[$index] = (array) $post;
 // }
 // var_dump($posts);

 // $posts = array_map(function($post) {
 //   return (array) $post;
 // }, $posts);

// $titles = array_column($posts, 'title');
// var_dump($titles);

// $authors = array_column($posts, 'author');
// var_dump($authors);

// $authors = array_column($posts, 'author', 'title');
// var_dump($authors);


 ?>

<?php

// Arrays

$belchers = [
    'Bob',
    'Linda',
    'Tina',
    'Gene'
];
//* If we wanted to add to the array we simply write:
$belchers[] = 'Lousie';

// Associative Arrays

$belcher = [
    'age' => 31,
    'occupation' => 'Restaurant owner'
];

//* To add a new key and value
$belcher['name'] = 'Bob';

//* To remove a key and value
unset($belcher['name']);

//* To get the value of a key in an array
//echo $belcher['occupation'];

//* To see what's in an array
//var_dump($belcher);
//die(var_dump($belcher));

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

// $unpublishedPosts = array_filter($posts, function($post) {
//   return ! $post->published;
// });

// $publishedPosts = array_filter($posts, function($post) {
//   return $post->published;
// });
//var_dump($publishedPosts);

// This modifies the posts to return true:
// $modified = array_map(function($post) {
//   $post->published = true;
//   return $post;
// }, $posts);
//$modified = array_map(function($post) {
  //return (array) $post;
  //Maybe return all published without exposing everything about a post:
  //return ['title' => $post->title];
  //Or return just the title:
  //return $post->title;
//}, $posts);


//This does the same as array_map:
// foreach ($posts as $post) {
//   $post->published = true;
// }
//var_dump($modified);

// $titles = array_column($posts, 'title');
// var_dump($titles);

//If you want to return an array of an array we could do:
 // foreach ($posts as $index => $post) {
 //   $posts[$index] = (array) $post;
 // }
 // var_dump($posts);

//This does the same:
$posts = array_map(function($post) {
  return (array) $post;
}, $posts);

// $titles = array_column($posts, 'title');
//$authors = array_column($posts, 'author');
//We can set the 'title' of the post as the key:
$authors = array_column($posts, 'author', 'title');


//var_dump($authors);

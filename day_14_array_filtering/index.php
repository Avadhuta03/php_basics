<?php



class Post
{


	public $title;


	public $published;


	public function __construct($title, $published)
	{
		$this->title = $title;
		$this->published = $published;
	}

}


$posts = [

	new Post('My First Post', true),

	new Post('My second Post', true),

	new Post('My third Post', false),

	new Post('My fourth Post', true),

	new Post('My fifth Post', false),

	new Post('My sixth Post', true)


];


// var_dump($posts);


/*Using array_filter */


$publishedPosts = array_filter($posts, function($post){


	return $post->published;

});


// var_dump($publishedPosts);


$unpublishedPosts = array_filter($posts, function($post){


	return ! $post->published;

});

// var_dump($unpublishedPosts);




/* array_map */

$modified = array_map(function($post){


	return ['title' => $post->title];

}, $posts);



$array = array_map(function($post){

	//return array and not collection

	return (array) $post;

}, $posts);


var_dump($array);

$titles = array_map(function($post){ 

	return $post->title;

}, $posts);

// var_dump($titles);




$titles = array_column($posts, 'title');

var_dump($titles);
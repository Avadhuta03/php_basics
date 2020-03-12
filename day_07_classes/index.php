<?php





require 'functions.php';


class Task
{

	public $description;

	public  $completed = false;

	public function __construct($description)
	{
		$this->description = $description;
	}


	public function complete()
	{
		$this->completed = true;
	}

	public function isComplete()
	{
		return $this->completed;
	}

}   


$tasks = [

	new Task('Create a Website!'),

	new Task('Deploy a Website!'),

	new Task('Upgrade a Website!')
];


$tasks[0]->complete();


require 'index.view.php';




// $task = new Task('go to store');


// $task->complete();

// dd($task->isComplete());






// // dd($tasks);

// // $task = new Task('finish the layout');



// // $task->complete();

// // var_dump($task->isComplete());


// // dd($task);


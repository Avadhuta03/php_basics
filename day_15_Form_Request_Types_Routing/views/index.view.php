<?php require('partials/header.php') ?>



<hr>

<h5>Submit your Name</h5>

<form method="POST" action="/names">
	
	<input type="text" name="name">

	<button type="submit">Submit</button>

</form>



<hr>

<h5>Task Lists</h5>
<ul>
	<?php foreach($tasks as $task) : ?>
	
		<?php if($task->completed) : ?>
		<li>
			<strike> <?= $task->description; ?> </strike>
		</li>

		 <?php else : ?>
		
		<li><?= $task->description; ?></li>

		<?php endif ; ?>

	<?php endforeach; ?>

</ul>

<?php require('partials/footer.php'); ?>
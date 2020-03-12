<!DOCTYPE html>
<html>
<head>
	<title>Document</title>

	<style>
			header{
				background: #e3e3e3;
				text-align: center;
				padding: 2em;
			}

	</style>


</head>

<body>

	<h1>Task for a Week</h1>


	<li>
		<strong>Name : </strong> <?= $task['title']; ?>			
	</li>


	<li>
		<strong>Due Date : </strong> <?= $task['due']; ?>			
	</li>


	<li>
		<strong>Responsible Person : </strong> <?= $task['assigned_to']; ?>			
	</li>


	<li>
		<strong>Status : </strong> 

			<?php if($task['completed']) : ?>

			<span class="icon">&#9989;</span>

		<?php else : ?>

			<span class="icon">Incomplete</span>

		<?php endif ; ?>			
	</li>


<!-- 	<ul>
		<?php foreach ($task as $heading => $value) : ?>

				<li><strong><?= ucwords($heading); ?> : </strong><?= $value ?></li>

		<?php endforeach; ?>

	</ul>
 -->

</body>
</html>
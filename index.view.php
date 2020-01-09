<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>

	<meta charset="utf-8">

	
</head>

<body>



		<h1>To Do Task</h1>

		<ul>

			<li>
				<strong>Name :</strong> <?= $task['title'] ?>	
			</li>



			<li>
				<strong>Description :</strong> <?= $task['description'] ?>	
			</li>



			<li>
				<strong>Responsible Person :</strong> <?= $task['assigned to'] ?>	
			</li>


			<li>
				<strong>Due Date :</strong> <?= $task['due'] ?>	
			</li>



			<li>

				<strong>Status : </strong>
				
				<?php if($task['completed']) : ?>

				  		<span class="icon">&#9989;</span>


				 <?php else : ?>

				   			Incomplete

				  <?php endif; ?>

			</li>

		</ul>

	

</body>

</html>

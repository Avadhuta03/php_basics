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


	<ul>

			<?php foreach($animals as $animal) : ?>

				<li><?= $animal ?>


			<?php endforeach ?>

			<!-- <?php

				foreach($names as $name)
				{
					echo "<li>$name</li>";
				}

			?> -->

	</ul>


</body>
</html>
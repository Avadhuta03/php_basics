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
			<?php foreach ($person as $key => $feature) : ?>

				<li><strong><?= $key." : " ?></strong><?= $feature ?></li>


			<?php  endforeach; ?>

	</ul>


</body>
</html>
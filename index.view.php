<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>

	<meta charset="utf-8">

	
</head>

<body>


		<ul>

			<?php foreach($person as $feature => $val) : ?>

			  <li><strong><?= $feature; ?></strong>= <?= $val ?></li>

			<?php endforeach; ?>

		</ul>

	

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>

	<meta charset="utf-8">

	<style>
		
		header{

			background: grey;
			padding: 2em;
			text-align: center;
		}

	</style>

</head>

<body>


	<header>

		<h1><?= htmlspecialchars($_GET['name']);   ?></h1>

	</header>

</body>

</html>



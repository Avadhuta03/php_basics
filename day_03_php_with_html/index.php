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



	<header>
		<?= "I am stripping unnecessary " . htmlspecialchars($_GET['code']); ?>
	</header>


</body>
</html>
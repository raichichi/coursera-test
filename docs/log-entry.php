<!DOCTYPE html>
<html>
<head>
	<title>Mik's Log Entry</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<style type="text/css">
		form label {
			color: white;

		}
	</style>
</head>
<body>
	<header>
		<h1 id="temporary-logo">Snowfall</h1>
	</header>

	<nav class="top-nav">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="adventurelog.html">Log</a></li>
		</ul>
	</nav>

	


	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<label for="lentry">Write your entry here:</label><br>
		<input type="text" id="lentry" name="lentry"><br>
		<label for="lkeyword">Enter your password here:</label><br>
		<input type="password" id="pwd" name="pwd">
		<br>
		<input type="submit" name="submit" value="Hello?">
	</form>

	<?php echo "does php work?"; ?>




</body>
</html>

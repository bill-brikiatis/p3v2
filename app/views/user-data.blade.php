<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Generate User Data</title>
	<link type="text/css" rel="stylesheet"	href="style.css">
</head>
<body>
	<h1>Generate User Data</h1>
	
	
	{{ Form::open(array( 
		'url' => 'user-data', 
		'method' => 'GET'
		)) }}
		
		{{ Form::label('users', 'Number of Users') }}
		{{ Form::select('users', array(
			1 => 1,
			2 => 2,
			3 => 3,
			4 => 4,
			5 => 5,
			6 => 6,
			7 => 7,
			8 => 8,
			9 => 9,
			10 => 10
		
		), 1) }}
		
	{{ Form::submit('Generate!') }}
		
	{{ Form::close() }}
	<br>
	
	<?php
	if(!($_GET)){
			echo "Please enter the number of users.<br><br>";
		}
		else {
			$faker = Faker\Factory::create();
			$users = $_GET['users'];
			for ($i=0; $i < $users; $i++) { 
				echo "<strong>$faker->name</strong><br>";
				echo "$faker->address <br>";
				echo "$faker->text <br><br>";
			}}
	?>
	
	<a href="/">Back to Home</a>

</body>
</html>
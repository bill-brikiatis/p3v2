<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Generate User Data</title>
</head>
<body>
	<h1>Generate User Data</h1>
	
	
	{{ Form::open(array( 
		'url' => 'user-data', 
		'method' => 'GET'
		)) }}
		
		{{ Form::label('users', '# of Users') }}
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
		
	{{ Form::submit('Submit') }}
		
	{{ Form::close() }}
	
	
	<?php
	if(!($_GET)){
			echo "Please enter the number of users.";
		}
		else {
			$faker = Faker\Factory::create();
			$users = $_GET['users'];
			for ($i=0; $i < $users; $i++) { 
				echo "$faker->name <br>";
				echo "$faker->address <br>";
				echo "$faker->text <br><br>";
			}}
	?>

</body>
</html>
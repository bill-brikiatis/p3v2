<?php
	class Gen {
		var $graphs;
		
		public function __construct($graphs) {
			$this->graphs = $graphs;
		}
		
		public function genText() {
			if($this->graphs) {
				$generator = new Badcow\LoremIpsum\Generator();
				$paragraphs = $generator->getParagraphs($this->graphs);
				echo implode('<p>', $paragraphs);
			}
			else {
				echo "Something is wrong. The system doesn't know the number of paragraphs.";
			}
			
		}
		
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lorem Ipsum Text Generator</title>
	<link type="text/css" rel="stylesheet"	href="style.css">
</head>
<body>
	<h1>Lorem Ipsum Text Generator</h1>
	
	{{ Form::open(array( 
		'url' => 'gentext', 
		'method' => 'GET'
		)) }}
		
		{{ Form::label('graphs', '# of Paragraphs') }}
		{{ Form::select('graphs', array(
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

	<div class="gen">
		
		<?php 
		if(!($_GET)){
			echo "Please enter the number of paragraphs.";
		}
		else {
		$graphs = $_GET['graphs'];
		$obj1 = new Gen($graphs);
		echo $obj1->genText();
		}
		

		?>
	</div>
	
	<a href="/">Back to Home</a>
</body>
</html>





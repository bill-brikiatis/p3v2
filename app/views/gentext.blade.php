<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lorem Ipsum Text Generator</title>
</head>
<body>
	<div class="welcome">
		<h1>Lorem Ipsum Text Generator</h1>
	</div>
	<?php
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs(1);
		echo implode('<p>', $paragraphs);
	?>
</body>
</html>
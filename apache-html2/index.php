<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK_2</title>
</head>
<body>
    <h1>
        ROSBANK
    </h1>

	<h2>
		<?php
		$hostname = gethostbyaddr($_SERVER['SERVER_ADDR']);
		echo $hostname;
		?>
	</h2>
</body>
</html>
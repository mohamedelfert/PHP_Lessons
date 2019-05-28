<?php
	
	$sitetheme = "White"; 

	if ( $sitetheme == "Main" ) {

		$css = "main.css";

	} elseif ( $sitetheme == "White" ) {

		$css = "white.css";

	} else {
		
		$css = "main.css";

	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Homepage</title>
		<link rel="stylesheet" href="<?php echo $css; ?>">
	</head>
	<body>
		<h1>This Is <?php echo $css ?></h1>
	</body>
</html>
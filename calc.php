<html>
	<head>
			<title>Tip Calculator</title>
			<link rel="stylesheet" type="text/css" href="stylesheet.css">
			<meta charset="utf-8">
			<meta name= "author" content="Broulaye Doumbia">
	</head>
	<body>
		<?php
			$Amount = $_POST['Amount'];
			$dropdown = $_POST['calc'];
		?>
		<form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<input type = "radio" name = "calc" value = "ten"> 10%
            <input type = "radio" name = "calc" value = "fifteen"> 15%
            <input type = "radio" name = "calc" value = "twenty"> 20% <br></br>
			Enter Amount: <input type="text" name="Amount" required/><br></br>
			<input type="submit" name="Submit"/>
			<?php
			switch ($dropdown) {
				case 'ten':
					$tip = 0.10 * $Amount;
					$Amount = $Amount + $tip;
					echo('<p>Tip: ' . '$' . $tip . '</p>');
					echo('Bill Total: ' . '$' . $Amount);
					break;
				case 'fifteen':
					$tip = 0.15 * $Amount;
					$Amount = $Amount + $tip;
					echo('<p>Tip: ' . '$' . $tip . '</p>');
					echo('Bill Total: ' . '$' . $Amount);
					break;
				case 'twenty':
					$tip = 0.20 * $Amount;
					$Amount = $Amount + $tip;
					echo('<p>Tip: ' . '$' . $tip . '</p>');
					echo('<p>Bill Total: ' . '$' . $Amount . '</p>');
				default:
					break;
			}
			?>
			
		</form>
	</body>
</html>
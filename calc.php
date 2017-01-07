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
			$dropdown = $_POST['dropdown'];
		?>
		<form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<select name = "dropdown">
				<option></option>
				<option value = "5%">five percent</option>
				<option value = "10%">ten percent</option>
				<option value = "15%">fithteen percent</option>
				<option value = "20%">twenty percent</option>
			</select><br></br>
			Enter Amount: <input type="text" name="Amount" required/><br></br>
			<input type="submit" name="Submit"/>
			<?php
			switch ($dropdown) {
				case 'five percent':
					$tip = 0.05 * $Amount;
					$Amount = $Amount + $tip;
					echo('<p>Tip: ' . '$' . $tip . '</p>');
					echo('Bill Total: ' . '$' . $Amount);
					break;
				case 'ten percent':
					$tip = 0.10 * $Amount;
					$Amount = $Amount + $tip;
					echo('<p>Tip: ' . '$' . $tip . '</p>');
					echo('Bill Total: ' . '$' . $Amount);
					break;
				case 'fifften percent':
					$tip = 0.15 * $Amount;
					$Amount = $Amount + $tip;
					echo('<p>Tip: ' . '$' . $tip . '</p>');
					echo('Bill Total: ' . '$' . $Amount);
					break;
				case 'twenty percent':
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
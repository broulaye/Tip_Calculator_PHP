<?php

function compute() {
	$amount = $_POST['Amount'];

	switch ($_POST['dropdown']) {
		case 'five percent':
			$finalAmount = $amount + ($amount*0.05);
			return $finalAmount;
			break;
		case 'ten percent':
			$finalAmount = $amount + ($amount*0.10);
			return $finalAmount;
			break;
		case 'fifften percent':
			$finalAmount = $amount + ($amount*0.15);
			return $finalAmount;
			break;
		case 'twenty percent':
			$finalAmount = $amount + ($amount*0.20);
			return $finalAmount;
			break;
		default:
			return $amount;
			break;
	}
}
	echo "Final amount is: " . compute();
	echo "Tip: " . compute() - $_POST['Amount'];
?>
<br>
<a href="calc.php">Back</a>
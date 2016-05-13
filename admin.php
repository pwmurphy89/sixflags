<?php
	include 'includes/db_connect.php';
	$change = $_GET['change'];
	if($change == 'update'){
		$message = "Update Success";
	}else if($change == 'insert'){
		$message = "Added Success";
	}else if ($change == 'delete'){
		$message = "Delete Success";
	}
?>

<!DOCTYPE html>
<html>
<head>

	<title>ADMIN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="admin-wrapper col-sm-6 col-sm-offset-3">
				<div class="success msg"><?php print $message; ?></div>
				<div class="col-sm-6"><a href="add_promotion.php">Add a new Promotion</a></div>
				<div class="col-sm-6"><a href="manage_promotion.php">Manage a current Promotion</a></div>

			</div>
		</div>
	</div>
</body>
</html>
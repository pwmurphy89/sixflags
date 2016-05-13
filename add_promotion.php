<?php
	include 'includes/db_connect.php';
	$updated = $_GET['id'];
	if($updated){
		$message = "Your promo has been added to the database";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Promotion</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="admin-wrapper col-sm-6 col-sm-offset-3">
				<div class="success msg"><?php print $message; ?></div>
				<div class="col-sm-6"><a href="add_promotion.php">Add a new Promotion</a></div>
				<div class="col-sm-6"><a href="manage_promotion.php">Manage a current Promotion</a></div>
				
				<form action="admin_process.php?task=insert" method="post">
					<div class="form-group">
					    <label for="exampleInputEmail1">Promotion Title</label>
					    <input type="text" name="promotion_title" class="form-control" id="field1" placeholder="Promotion Title">
					</div>
					<div class="form_group">
					    <label for="exampleInputPassword1">Header Image</label>
					    <input type="text" name="header_image" class="form-control" id="field2" placeholder="Header Image">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Header Text</label>
					    <input type="text" name="header_text" class="form-control" id="field3" placeholder="Header Text">
					</div>
					<div class="form-group">
					    <label for="exampleInputFile">Body Text</label>
					    <input type="text" name="body_text" class="form-control" id="field4" placeholder="Body Text">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Lower Image1</label>
					    <input type="text" name="lower_image1" class="form-control" id="field5" placeholder="Enter path to lower image1">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Lower Header1</label>
					    <input type="text" name="lower_header1" class="form-control" id="field6" placeholder="Lower Header">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Lower Body Text1</label>
					    <input type="text" name="lower_body_text1" class="form-control" id="field7" placeholder="Lower Body Text">
					</div>
						<div class="form-group">
					    <label for="exampleInputPassword1">Lower Image2</label>
					    <input type="text" name="lower_image2" class="form-control" id="field8" placeholder="Enter path to lower image2">
					</div>
						<div class="form-group">
					    <label for="exampleInputPassword1">Lower Header2</label>
					    <input type="text" name="lower_header2" class="form-control" id="field9" placeholder="Lower Header2">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Lower Body Text2</label>
					    <input type="text" name="lower_body_text2" class="form-control" id="field10" placeholder="Lower Body2">
					</div>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
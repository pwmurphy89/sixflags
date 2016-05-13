<?php
	include 'includes/db_connect.php';
	$id = $_GET['id'];
	$query = 'SELECT * FROM promos WHERE id =' .$id;
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
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
				<div class="col-sm-12"><a href="add_promotion.php">Create a  a new Promoiton</a></div>
				<div class="col-sm-12"><a href="manage_promotion.php">Manage a current Promotion</a></div>	
				<form action="admin_process.php?task=update&id=<?php print $row['id']; ?>" method="post">
					<div class="form-group">
					    <label for="exampleInputEmail1">Promotion Title</label>
					    <input type="text" value="<?php print $row['promotion_title']; ?>" name="promotion_title" class="form-control" id="field1" placeholder="Promotion Title">
					</div>
					<div class="form_group">
					    <label for="exampleInputPassword1">Header Image</label>
					    <input type="text" value="<?php print $row['header_image']; ?>" name="header_image" class="form-control" id="field2" placeholder="Header Image">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Header Text</label>
					    <input type="text" value="<?php print $row['header_text']; ?>" name="header_text" class="form-control" id="field3" placeholder="Header Text">
					</div>
					<div class="form-group">
					    <label for="exampleInputFile">Body Text</label>
					    <input type="text" value="<?php print $row['body_text']; ?>" name="body_text" class="form-control" id="field4" placeholder="Body Text">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Lower Image1</label>
					    <input type="text" value="<?php print $row['lower_image1']; ?>" name="lower_image1" class="form-control" id="field5" placeholder="Enter path to lower image1">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Lower Header1</label>
					    <input type="text" name="lower_header1" value="<?php print $row['lower_header1']; ?>" class="form-control" id="field6" placeholder="Lower Header">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Lower Body Text1</label>
					    <input type="text" value="<?php print $row['lower_body_text1']; ?>" name="lower_body_text1" class="form-control" id="field7" placeholder="Lower Body Text">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Lower Image2</label>
					    <input type="text" value="<?php print $row['lower_image2']; ?>" name="lower_image2" class="form-control" id="field8" placeholder="Enter path to lower image2">
					</div>
						<div class="form-group">
					    <label for="exampleInputPassword1">Lower Header2</label>
					    <input type="text" value="<?php print $row['lower_header2']; ?>" name="lower_header2" class="form-control" id="field9" placeholder="Lower Header2">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Lower Body Text2</label>
					    <input type="text" value="<?php print $row['lower_body_text2']; ?>" name="lower_body_text2" class="form-control" id="field10" placeholder="Lower Body2">
					</div>
					<button type="submit" class="btn btn-default">Update</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
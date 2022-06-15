<?php
session_start();
$username = '';
if ($_SESSION["name"] != "") {
	$username = $_SESSION["name"];
} else {
	header("Location:index.php");
}
if (isset($_POST['submit_notice'])) {
	include("connect_db.php");
	$titledata = $_POST['title'];
	$descriptiondata = $_POST['description'];
	if ($titledata != "" || $descriptiondata != "") {
		$query = "Insert into notice(post_by,title,description) value('$username','$titledata','$descriptiondata');";
		$result = mysqli_query($sqli, $query);
		if (mysqli_affected_rows($sqli) > 0) {
			echo "<script> alert('Done') </script>";
		}
	} else {
		echo "<script> alert('Fill all blocks') </script>";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>ICE-SPACE | Broadcast Notice</title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css" />
</head>

<body>
	<?php
	include("Navbar.php");
	?>
	<?php
	include("Logout.php");
	?>
	<div class="container mt-4" style="height: 100vh">
		<div style="width: 60%; height: 100vh; margin:auto">
			<h6>Broadcast notice</h6>
			<div class="bg-secondary">
				<form method="post" class="table-responsive p-3">
					<input type="text" class="form-control" name="title" placeholder="Add title">
					<textarea name="description" class="mt-4 form-control" placeholder="Add description"></textarea>

					<input type="submit" name="submit_notice" class="mt-4 btn btn-success" name="post_button" value="Broadcast">
				</form>
			</div>
		</div>
	</div>
	</div>

</body>
<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>

</html>
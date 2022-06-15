<?php
session_start();
$username = '';
if ($_SESSION["name"] != "") {
	$username = $_SESSION["name"];
} else {
	header("Location:index.php");
}

if (isset($_POST['upload_doc'])) {
	$uploadOk = 0;
	if (isset($_FILES['file1'])) {
		$fname1 = $_FILES['file1']['name'];
		$tmp = $_FILES['file1']['tmp_name'];
		$type = $_FILES["file1"]["type"];
		$size = $_FILES["file1"]["size"];
		$modal = "uploads/$fname1";


		if ($size > 8000000000) {
			echo "<script>alert('file size error')</script>";

			$uploadOk = 0;
		} else {
			include("connect_db.php");
			$title = $_POST['Ctitle'];
			$code = $_POST['Ccode'];
			$y=$_SESSION['name'];
			$x = move_uploaded_file($tmp, "upload/Files/" . $fname1);
			$query = "Insert into files(name,code,content,location) value('$y', '$code','$title','../upload/Files/$fname1');";
			$result = mysqli_query($sqli, $query);
			$uploadOk = 1;
			
		}
	} else {
		echo "<script>alert('Please fill upload')</script>";
		$uploadOk = -1;
	}
	if ($uploadOk == 1) {
		echo "<script>alert('file uploaded succesfully')</script>";
	} else if ($uploadOk == 0) {
		echo "<script>alert('file init failed')</script>";
	}
}


?>
<!DOCTYPE html>
<html>

<head>
	<title>ICE-SPACE | Upload File</title>
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
		<div class="" style="width: 50%; margin:auto">
			<h6>Add material</h6>
			<div class="bg-secondary">
				<form method="post" class="embed-responsive p-3" enctype="multipart/form-data">
					<label for="year" style="color: white;">Choose Semister:</label>
					<select name="year" style="width: 100%; padding: 2%; border-radius: 7px">
						<option value="">First Year(ODD)</option>
						<option value="">First Year(EVEN)</option>
						<option value="">Second Year(ODD)</option>
						<option value="">Second Year(EVEN)</option>
						<option value="">Third Year(ODD)</option>
						<option value="">Third Year(EVEN)</option>
						<option value="">Fourth Year(ODD)</option>
						<option value="">Fourth Year(EVEN)</option>
						<option value="">M.Sc(First Semister)</option>
						<option value="">M.Sc(Second Semister)</option>
						<option value="">M.Sc(Third Semister)</option>
					</select> <br> <br>
					<input type="text" class="form-control" name="Ctitle" placeholder="Add title (Example : Chapter Name)"> <br>
					<input type="text" class="form-control" name="Ccode" placeholder="Add Course Code(Ex: ICE1111)">
					<input type="file" class="mt-4 form-control" name="file1" required="" required="">
					<input type="submit" name="upload_doc" class="mt-4 btn btn-success" value="Upload">
				</form>
			</div>
		</div>
	</div>

</body>
<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>

</html>
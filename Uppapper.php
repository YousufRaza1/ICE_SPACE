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

		if ($size > 80000000000) {
			echo "<script>alert('file size error')</script>";

			$uploadOk = 0;
		} else {
			include("connect_db.php");
			$year = $_POST['year'];
			$ses = $_POST['session'];
			$y=$_SESSION['name'];
			$x = move_uploaded_file($tmp, "upload/Papper/" . $fname1);
			$query = "Insert into papper(name,year,session,location) value('$y','$year','$ses','../upload/Papper/$fname1');";
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
	<title>ICE-SPACE | Upload Papper</title>
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
			<h6>Add Previous Year Papper</h6>
			<div class="bg-secondary">
				<form method="post" class="embed-responsive p-3" enctype="multipart/form-data">
					<label for="" style="color: white;">Choose Semister:</label>
					<select name="year" style="width: 100%; padding: 2%; border-radius: 7px">
						<option value="FirstYear(ODD)">First Year(ODD)</option>
						<option value="FirstYear(EVEN)">First Year(EVEN)</option>
						<option value="SecondYear(ODD)">Second Year(ODD)</option>
						<option value="SecondYear(EVEN)">Second Year(EVEN)</option>
						<option value="ThirdYear(ODD)">Third Year(ODD)</option>
						<option value="ThirdYear(EVEN)">Third Year(EVEN)</option>
						<option value="FourthYear(ODD)">Fourth Year(ODD)</option>
						<option value="FourthYear(EVEN)">Fourth Year(EVEN)</option>
						<option value="M.Sc(FirstSemister)">M.Sc(First Semister)</option>
						<option value="M.Sc(SecondSemister)">M.Sc(Second Semister)</option>
						<option value="M.Sc(ThirdSemister)">M.Sc(Third Semister)</option>
					</select> <br> <br>
                    <label for="" style="color: white;">Session:</label>
					<input type="text" class="form-control" name="session" placeholder="Session (Example : 2016-2017)"> <br>
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
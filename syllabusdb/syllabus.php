<?php
include("../connect_db.php");

?>
<!DOCTYPE html>
<html>

<head>
	<title>ICE-SPACE | Syllabus </title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.css" />
</head>

<body>
	<?php
	include("../notesdb/NoteNav.php");
	?>
	<div class="container" style="height: 100vh">
		<div class="row mt-5">
			<?php
			$query = "Select * from syllabus";
			$result = mysqli_query($sqli, $query);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_array($result)) {


			?>
					<div class="col-md-4">
						<div class="card" style="background-color: #C5C5C5;">
							<center><h4 class="card-title"> <?php echo "" . $row['year']; ?></h4></center>
							<div class="card-body">
								<center><a href='<?php echo "" . $row['location'] ?>' class="btn btn-primary">Open</a></center>
							</div>
							<h6 style="margin: auto;padding-bottom:10px">
								<?php
								echo "Uploaded by : " . $row['name'];
								?>
							</h6>
						</div>
					</div>
			<?php
				}
			}

			?>
		</div>

	</div>

</body>
<script type="text/javascript" src="../JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="../bootstrap-4.3.1-dist/js/bootstrap.js"></script>

</html>
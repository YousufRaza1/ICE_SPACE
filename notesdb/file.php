<!DOCTYPE html>
<html>
<head>
	<title>ICE-SPACE | Files</title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>
<body>

<?php
	include("NoteNav.php");
	include("../connect_db.php");
	session_start();
	
?>	
<!-- Body 1-->
<div class="container mt-3" style="height: 105vh">
	<div class="row">
		<?php
			$code = "";
		    if(isset($_GET['code'])){
				$code = $_GET['code'];
			}
			$query="Select * from files where code= '$code'";
			$result=mysqli_query($sqli,$query);
			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_array($result)) {
					
	
		?>
		<div class="col-md-3 mt-3">
			<div class="card h-100" style="background-color: #C5C5C5;">
				<div class="card-title h-50">
					<center> <?php echo "".$row['content'];  ?> </center>
				</div>
				<div class="card-body">
					<center><a href='<?php echo "".$row['location']; ?>' target="_blank" class="btn btn-primary">OPEN</a></center>
				</div>
				<h6 style="margin: auto; padding-bottom:10px">
					<?php
							echo "uploaded by : ".$row['name'];
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
	
	

<!--  End of Body  -->

</body>
<script type="text/javascript" src="../JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="../bootstrap-4.3.1-dist/js/bootstrap.js"></script>

</html>

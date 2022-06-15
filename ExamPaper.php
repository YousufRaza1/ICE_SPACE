
<!DOCTYPE html>
<html>
<head>
	<title>ICE-SPACE | Exam Papper</title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>
<body>
	<?php
		include("Navbar.php");
	?>

	<!-- Body1  -->
	<div class="container mt-5" style="height: 100vh !important">
		<div class="row mt-5">
			<div class="col-md-6 mt-5">
				<h2>Exam paper</h2>
				<h5><p>Previous year exam papers for practice</p></h5>
				
			</div>
			<div class="col-md-6">
			<table class="mt-3 table-responsive">
				<tr>
					<th width="100" >
						<div class="card p-3 m-1" style="height: 100px !important">
						<center> <a href="papperdb/papper.php?code=FirstYear(ODD)">First Year(ODD)</a></center>
					</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="papperdb/papper.php?code=FirstYear(EVEN)">First Year(EVEN)</a></center>
					</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="papperdb/papper.php?code=SecondYear(ODD)">Second Yaer(ODD)</a></center>
					</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="papperdb/papper.php?code=SecondYear(EVEN)">Second Year(EVEN)</a></center>
					</div>
					</th>
				</tr>
				<tr>
					<th width="100" >
						<div class="card p-3 m-1" style="height: 100px !important">
						<center> <a href="papperdb/papper.php?code=ThirdYear(ODD)">Third Year(ODD)</a></center>
					</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3" style="height: 100px !important">
						<center><a href="papperdb/papper.php?code=ThirdYear(EVEN)">Third Year(EVEN)</a></center>
					</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="papperdb/papper.php?code=FourthYear(ODD)">Fourth Year(ODD)</a></center>
					</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="papperdb/papper.php?code=FourthYear(EVEN)">Fourth Year(EVEN)</a></center>
					</div>
					</th>
				</tr>	
				<tr>
					<th width="100" >
						<div class="card p-3 m-1" style="height: 100px !important">
						<center> <a href="papperdb/papper.php?code=M.Sc(FirstSemister)">M.Sc (First semister)</a></center>
					</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3" style="height: 100px !important">
						<center><a href="papperdb/papper.php?code=M.Sc(SecondSemister)">M.Sc (Second semister)</a></center>
					</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="papperdb/papper.php?code=M.Sc(ThirdSemister)">M.Sc (Third semister)</a></center>
					</div>
					</th>
				</tr>	


			</table>
				
			
		</div>
		</div>
	</div>


</body>
<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</html>
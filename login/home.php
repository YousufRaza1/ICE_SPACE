<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ICE-SPACE <?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #6665ee;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    </style>
</head>
<body>
    <?php
      include("Nav.php");
    ?>
    <nav class="navbar">
    <h4>Welcome <?php echo $fetch_info['name'] ?></h4> 
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
	<!-- Body1 design HTML code    -->
	<div class=" bg-text container" style="height: 100vh">
		<div class="ml-5 mt-5 pl-5">
			<div class="pt-5">
				<table width="100%">

					<tr>
						<table width="100%">
							<tr>
								<th width="265">
								<a href="../Upfile.php" style="font-size: 180%;">Upload Notes</a>	
								</th>
								<th width="100">
								<a href="../Upnotice.php" style="font-size: 180%; ">Broadcast Blogs</a>	
								</th>
							</tr>
							<tr>
								<td width="100">
									<h6>Upload necessary notes & slide.</h6>
								</td>
								<td width="100">
									<h6>Broadcast your opinion.</h6>
								</td>
							</tr>
							</table>
					</tr>
					<tr>
						<table class="mt-5" cellpadding="5"	 width="100%">
							<tr>
								<th width="210">
								<a href="../Upsyllabus.php" style="font-size: 180%;">Upload Syllabus</a>	
								</th>
								<th width="100">
								<a href="../Uppapper.php" style="font-size: 180%;">Upload Exam Paper</a>
								</th>
							</tr>
							<tr>
								<td width="100">
									<h6>Upload academic syllabus</h6>
								</td>
								<td width="100">
									<h6>Upload previous year exam papers.</h6>
								</td>
							</tr>
							</table>
					</tr>
				</table>
			</div>
		</div>
	</div>                    
    
</body>
</html>
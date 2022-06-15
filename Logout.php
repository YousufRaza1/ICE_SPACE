<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <nav class="row p-2" style="text-align: right;background: #6665ee;">
        <div class="col-md-6">
            <div class="ml-5" style="text-align:left ">
                 <h4>Welcome <?php echo $_SESSION['name'] ?></h4> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="mr-5" style="margin: right;">
                <a class="btn" href="login/logout-user.php" style="color: #6665ee;font-weight:bold; text-decoration:none;background:white"  ">Logout</a>
            </div>
        </div>
    </nav>
</body>

</html>
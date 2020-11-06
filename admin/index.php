<?php

   // session_save_path("/home/users/web/b2830/ipg.rehltycom/cgi-bin/tmp");
    session_start();

    if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] === 1 ){
        die("<meta http-equiv='refresh' content='0; url=home.php'> ");
    }/*
    if (isset($_SESSION['Errors'])) {
        $error = $_SESSION['Errors'];
    }*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Banha Online </title>
		<meta charset="utf-8">
		<link href="css/appstyle.css" rel='stylesheet' type='text/css' />

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		
		  <link rel="icon" type="image/png" href="../logo.png">
</head>
<body>
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>Member Login</h1>
					<div class="head">
					
					</div>
				<form  action="controllers/LoginController.php" method="post">
						<input type="text" class="text" name="username"  placeholder=" Enter Username" required >
						<input type="password" name="password" placeholder=" Enter Password" required >
						<div class="submit">
							<input type="submit" onclick="myFunction()" name="LogInMember" value="Login ">
					</div>
					<div class="form-group">
                                    <p><?php if (isset($_SESSION["Errors"])) {
                                            echo $_SESSION["Errors"];
                                            session_destroy();
                                        }?>
                                    </p>
                                </div>
				</form>
			</div>

		</div>
			 <!-----//end-main---->

</body>
</html>

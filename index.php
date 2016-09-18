<?php
	session_start();
	if ($_SESSION["logged_on_user"] != "")
		header("Location: php/store.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARQ | Home</title>
    <link href="css/mystyle.css" rel="stylesheet">

</head>
 <body id="page">
<!-- Head =========================== -->
    <section class="main-header">
        <ul class="topnav" id="myTopnav">
			<li><a href="index.php">Home</a></li>
			<?php if (!$_SESSION["logged_on_user"] || $_SESSION["logged_on_user"] == "")
			echo "<li><a href='php/login.php'> Login </a></li>"; 
			?>
        </ul>
        <div class="caption">
            <h1> Discover <span><b>ARQ</b></span></h1>
            <a class="btn btn-transparent" href="#popup1">Sign Up</a>
			<a class="btn btn-light" href="php/store.php">Buy Now</a>
        </div>
<!-- popup signin -->
        <div id="popup1" class="overlay1">
            <div class="popup">
                <a class="close" href="#">X</a>
                <div class="content">
                   <form method="POST" action="php/create.php"> 
                        Name: <input type="text" name="full_name">
                        <span class="error">* <?php echo $nameErr;?></span>
                         <br><br>
                        E-mail: <input type="text" name="email">
                        <span class="error">* <?php echo $emailErr;?></span>
                        <br><br>
                        Password: <input type="text" name="passwd">
                        <span class="error"><?php echo $websiteErr;?></span>
                        <br><br>                        
                        <input class="btn" type="submit" name="submit" value="Submit">  
                    </form>
                </div>
            </div>
        </div>
<!--  and signup form -->
         <div id="popup2" class="overlay2">
            <div class="popup">
                <a class="close" href="#">X</a>
                <div class="content">
                     <form action="php/create.php" method="POST">
                        <h2>Sign Up</h2>
                        <div class="form" align="center">
                            <div id="usernameField">
                                <div>
                                    <div class="formLabel">
                                        <label>Email</label>
                                    </div>
                                    <input type="text" name="email" autocomplete="off">
                                </div>
                                <div id="passwdFeild">
                                    <div class="formLabel">
                                        <label>Password</label>
                                    </div>
                                    <input type="password" name="passwd" autocomplete="off">
                                </div>
                                    <a class="btn" href="login.php">Login</a>
                                </div>
                            </div>   
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

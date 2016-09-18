<?php

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
            <li><a href="#home">Contact</a></li>
            <li><a href="#news">About</a></li>
            <li><a href="#contact">Browse</a></li>
            <li><a href="#about">Home</a></li>
            <li class="icon">
                <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
            </li>
        </ul>
        <div class="caption">
            <h1> Discover <span><b>ARQ</b></span></h1>
            <a class="btn btn-transparent" href="#popup1">Sign Up</a>
            <a class="btn btn-light" href="/html/store.php">Buy Now</a>
        </div>
<!-- popup signin -->
        <div id="popup1" class="overlay1">
            <div class="popup">
                <a class="close" href="#">X</a>
                <div class="content">
                     <form action="create.php" method="POST">
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
                                <div class="passwdFeild">
                                    <div class="formLabel">
                                        <label>Password Confirm</label>
                                    </div>
                                    <input type="password" name="passwd" autocomplete="off">
                                </div>
                                <div class="passwdFeild">
                                    <div class="formLabel">
                                        <label>Full Name</label>
                                    </div>
                                    <input type="password" name="pwd" autocomplete="off">
                                </div>
                                <div class="passwdFeild">
                                    <div class="formLabel">
                                        <label>Password</label>
                                    </div>
                                    <input type="password" name="pwd" autocomplete="off">
                                </div>
                                <div class="sign-button-cont">
                                    <a class="btn btn-pop" href="#">Discover</a>
                                    <a class="btn" href="#popup2">Login</a>
                                </div>
                            </div>   
                        </div>
                     </form>
                </div>
            </div>
        </div>
<!--  and signup form -->
         <div id="popup2" class="overlay2">
            <div class="popup">
                <a class="close" href="#">X</a>
                <div class="content">
                     <form action="create.php" method="POST">
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
                                    <input type="password" name="pwd" autocomplete="off">
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

<?php
	# write your comment here
    // write your other comment here
	/*
		write your
		comment here
	*/
	$studentNo = "";
	$lastName = "";
	$firstName = "";
	$emailAddress = "";
	$password = "";
	$birthDate = null;
?>


<!DOCTYPE HTML>

<html>
<head>
    <title>ANTHON | REGISTRATION</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>

    <div id="page-wrapper">

        <header id="header">
            <h1><a href="index.html">WEBDEVTSY16T2</a></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a href="#menu" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="Register.php">Registration Form</a></li>
                                <li><a href="https://www.facebook.com/yaaattz">Contact Me</a></li>
                                <li><a href="welcome.php">Your Account</a></li>
                               
                              
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <article id="main">
            <header>
                <h2>Registration</h2>
                <p>Be part of our project now!</p>
            </header>
            <section class="wrapper style5">
                <div class="inner">

                    <h3>Please fill out this form:</h3>
                    
                    
                    
                    
                  <div class="container">
			<h1 class="text-center">Student Registration</h1>
			<div class="col-lg-offset-3 col-lg-6">
				<div class="well">
					<form method="POST" action="welcome.php"
						class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">
								Student ID:
							</label>
							<div class="col-lg-8">
								<input type="number" name="sid"
									class="form-control" required />
							</div>
						</div>
                        
                        <br>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Last Name:
							</label>
							<div class="col-lg-8">
								<input type="text" name="ln"
									class="form-control" required />
							</div>
						</div>
                        
                         <br>
						<div class="form-group">
							<label class="control-label col-lg-4">
								First Name:
							</label>
							<div class="col-lg-8">
								<input type="text" name="fn"
									class="form-control" required />
							</div>
						</div>
                         
                         <br>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Email Address:
							</label>
							<div class="col-lg-8">
								<input type="email" name="email"
									class="form-control" required />
							</div>
						</div>
                        
                         <br>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Password:
							</label>
							<div class="col-lg-8">
								<input type="password" name="pwd"
									class="form-control" required />
							</div>
						</div>
                        
                         <br>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Birthdate:
							</label>
							<div class="col-lg-8">
								<input type="text" name="bday"
									class="form-control" required />
							</div>
						</div>
                        
                         <br>
						<div class="form-group">
							<div class="col-lg-offset-4 col-lg-8">
								<button name="register" class="btn special">
									Register Here
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
            </section>
        </article>

        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-chrome"><span class="label">Google</span></a></li>
                <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>Copyright &copy;  2017 EXERCISE NO.2</li>
                <li>Designed by: <a href="#">Anthon Vincci Siegfred A. Ang</a></li>
            </ul>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
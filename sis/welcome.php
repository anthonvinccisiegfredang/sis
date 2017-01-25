<!DOCTYPE HTML>

<html>
<head>
    <title>BLEEP by Team MARI-ARA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />


</head>
    <body class="landing">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="index.html">BLEEP</a></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a href="#menu" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="generic.html">Generic</a></li>
                                <li><a href="elements.html">Elements</a></li>
                                <li><a href="Schedules.html">Schedules</a></li>
                                <li><a href="Register.html">Sign Up</a></li>
                                <li><a href="#">Log In</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
<?php
	
       <section id="one" class="wrapper style1 special">
            <div class="inner">
                <header class="major">
        if (isset($_POST['register']))
	{
		$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];

		echo "Welcome, " . $firstName . " " . $lastName . "!<br/>" . 
		'Your ID number is ' . $studentNo .
		'. <br/>
		Your email address is ' . $emailAddress.
		'. <br/>
		Your password is ' . $password .
		'. <br/>
		Your birthday is ' . $birthDate.
		'. <br/><br/>
		The time is ' . date('c');



	}
	else
	{
		header('location: register.php');



	}
</header>
?>
        
        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-chrome"><span class="label">Google</span></a></li>
                <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>Copyright &copy;  2017 Excerscie No.2</li>
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
<?php
include('dataentrylogin.php'); // Includes Login Script

if(isset($_SESSION['datalogin_user'])){
header("location: dataprofile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E&#8209;Hospi LogIn</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/templatemo_logo.jpg">
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/style.css"  rel='stylesheet' type='text/css'>
		<script>
	var ck_username= /^[A-Za-z0-9!@#$%^&*()_]{16}$/;
	function validate(form)
	{
		var username = form.username.value;
		var errors = [];
		var password = document.getElementById("password").value;
		if (!ck_username.test(username)) 
		{
			errors[errors.length] = "You must enter a valid Aadhaar no 16 numbers .";
		}
	}
	function reportErrors(errors)
	{
		var msg = "Please Enter Valide Data...\n";
		for (var i = 0; i<errors.length; i++) {
		var numError = i + 1;
		msg += "\n" + numError + ". " + errors[i];
	}
	alert(msg);
	}
	</script>
    </head>
    
    <body>

        <div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            <img src="images/phone.png" alt="phone"/>
                             044-458-569558
                    </div>
                    <div id="email" class="pull-right">
                            <img src="images/email.png" alt="email"/>
                            info@ehospi.com
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-top-menu">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand"><img src="images/24652templatemo_logo.png"" alt="E&#8209;Hospi Logo" title="E&#8209;Hospi Logo" /></a>
                        </div>
                         <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active" ><a href="index.html" onclick="rd_index()">HOME</a></li>
                                <li ><a href="Register.html" onclick="rd_reg()">SIGNUP</a></li>
								
								<script>
									function rd_index(){
										window.location.href = "index.html";
									}
									function rd_reg(){
										window.location.href = "error404.html";
									}
								
								</script>
                                <!--li><a href="#templatemo-portfolio">SPECIALIZATIONS</a></li>
                             <!--   <li><a href="#templatemo-blog">BLOG</a></li>
                                <li><a rel="nofollow" href="http://www.facebook.com/templatemo" 
                                		class="external-link" target="_parent">EXTERNAL</a></li>
                                <li><a href="#templatemo-contact">CONTACT</a></li-->
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
 <center>       
        <div class="form">
	<h4>Dataentry log in</h4>
			<form method="post" action=" " onSubmit="return validate(this);" name="form">
				<input type="text" name="username" placeholder="user name"  required><br><br>
				<input type="password" name="password" class="password" placeholder="password"  required><br><br>
				<span><?php echo $error; ?></span><br>
				<input name="submit" type="submit" value="login">
				
			</form>
			<br>
		<p><a href="#">forgot password?</a></p>
</div>
</center>
        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                                <li>
                                    <a href="#">
                                        <span class="social-icon-fb"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-rss"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
		<!-- templatemo 395  -->
    </body>
</html>
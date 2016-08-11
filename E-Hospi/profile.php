<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E&#8209;Hospi</title>
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
		
    </head>
    
    <body>

        <div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            <img src="images/phone.png" alt="phone"/>
                            Welcome <?php echo $login_session; ?>
                    </div>
                    <div id="email" class="pull-right">
                            <img src="images/email.png" alt="email"/>
                            <a href="logout.php" >LOGOUT</a>
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
                                <a href="#" class="navbar-brand"><img src="images/24652templatemo_logo.png" alt="E&#8209;Hospi Logo" title="E&#8209;Hospi Logo" /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="#templatemo-top">HOME</a></li>
                                <li><a href="#templatemo-welcome">ABOUT</a></li>
                                <li><a href="specialization.php" onclick="rd_special()">SPECIALIZATIONS</a></li>
								<script>																						
									function rd_special(){
										window.location.href= "specialization.php";
									}
								</script>                              
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
		
		<div class="templatemo-top-bar2" id="templatemo-top2">
            <div class="container">
                <div class="subheader">
					
                    <div id="phone" class="pull-left">
						<p id="para"> I am here to >></p>
						</div>
						<div id="header1" class="pull-right">
                            <a href="viewreports.php" class="button">View Reports</a>
							<a href="locatedoctor.php" class="button">Find a Doctor</button>
							<a class="button" href="hospitals.php">Locate a Hospital</a>
							<a href="https://www.apollohospitals.com/lets-talk-health/" target="_blank" class="button">Explore Health and Lifestyle</a>
                    </div>
                </div>
            </div>
        </div>
		
        <div>
            <!-- Carousel -->
            <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="1"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>WELCOME TO E&#8209;Hospi</h1>
								<BR>
								<br>
                               <!-- <p>CHOOSE THE ONE SUITABLE FOR YOU</p>
                                <p><a class="btn btn-lg btn-green" href="#" role="button" style="margin: 20px;">LOG&#8209;IN</a> 
                                	<a class="btn btn-lg btn-orange" href="#" role="button">SIGN&#8209;UP</a></p-->
                            </div>
                        </div>
                    </div>                    
                </div>
                <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /#templatemo-carousel -->
        </div>

        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to </span><span class="txt_orange">E&#8209;Hospi</span>
                    <p class="txt_slogan"><i>In day-to-day life of the people who are so busy with managing their life activities, health is the foremost thing, which if disturbed the entire life cycle suffers. In order to make life easier in the issues regarding health and management our health management system plays a great role to hit the track back.

The hospital management portal has all the database like the prescriptions, the test reports and other health history reports and suggestions given by the doctor as a record which can be accessed by the patients online with an unique id which will be generated by our portal so that the patient need not carry any records with them and don't have the fear of losing them.

The hospital management portal brings all the hospitals together in web portal displaying all its amenities and infrastructure along with doctor's profile for the patients to view them and to consult the hospital. So that the patients need not strain to locate the best hospital regarding their issues.</i></p>
                </div>	
            </div>
        </div>
       
	   
        <div id="templatemo-portfolio" >
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">SPECIALIZATIONS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    


                <div class="clearfix"></div>
                <div class="text-center">
                    <ul class="templatemo-project-gallery" >
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-graphic" >
                    
                                <div class="templatemo-project-box">

                                    <img src="images/gallery-image-1.png" class="img-responsive" alt="gallery" />

                                    <div class="project-overlay">
                                        <a href="specialization.php" style="color:white; text-decoration:none;"><h4>CANCER-CARE</h4></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-creative" >
                           
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-2.png" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <a href="specialization.php" style="color:white; text-decoration:none;"><h4>DIABETIC-CARE</h4></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-3.png" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <a href="specialization.php" style="color:white; text-decoration:none;"><h4>GASTROENTEROLOGY-CARE</h4></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-design" >
                            
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-4.png" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <a href="specialization.php" style="color:white; text-decoration:none;"><h4>HEART-CARE</h4></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                             
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-5.png" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <a href="specialization.php" style="color:white; text-decoration:none;"><h4>ORTHOPAEDICS-CARE</h4></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                           
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-6.png" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <a href="specialization.php" style="color:white; text-decoration:none;"><h4>SPINE-CARE</h4></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-design" >
                            
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-7.png" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <a href="specialization.php" style="color:white; text-decoration:none;"><h4>DARIATRIC-SURGERY</h4></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-creative" >
                             
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-8.png" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <a href="specialization.php" style="color:white; text-decoration:none;"><h4>NEUROSCIENCES</h4></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                </div>
			</div>
		</div>
    </div>   
		<br>
		<br>
        <div class="templatemo-partners" >
            <div class="container">
                <div class="row">


                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">OUR PARTNERS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="text-center">

                        <div style="margin-top:60px;">
                            <ul class="list-inline">
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner1.jpg" class="img-responsive" alt="partner 1" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner2.jpg" class="img-responsive" alt="partner 2" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner3.jpg" class="img-responsive" alt="partner 3" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner4.jpg" class="img-responsive" alt="partner 4" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner5.jpg" class="img-responsive" alt="partner 5" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner6.jpg" class="img-responsive" alt="partner 6" /></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>


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
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Back To Top</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                   			<span id="footer-line">Copyright &copy; 2016 <a href="#">E&#8209;Hospi</a></span>
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
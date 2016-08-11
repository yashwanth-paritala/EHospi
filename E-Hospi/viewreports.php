<?php
include('session.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u153965993_usrd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM login WHERE username= $login_session; ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E&#8209;Hospi</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />
<!--



-->
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
                                <li class="active"><a href="profile.php" onclick="rd_index()">HOME</a></li>
                                
                                <li><a href="specialization.php" onclick="rd_special()">SPECIALIZATIONS</a></li>
								<script>
									function rd_index(){
										window.location.href="profile.php";
									}
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
		
		
		<div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to </span><span class="txt_orange">E&#8209;Hospi</span>
                    <p class="txt_slogan"><i> </i></p>
                </div>	
            </div>
        </div>
<!-- Code for displaying the data from the database-->
	<div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Patient Details and Reports</span>
					<br>
					<img src="passport.jpg" alt="patient's photo" width="200" height="200"   style="float:left; margin:20px;"/>
	<font size="5">				
					<table style="border-width:5px;	border-style:hidden; width:100%; height:100%; font-size:20px; font-family:sans-serif,comic sans;" >
					<?php
					echo 
					"<tr>
						<th>Aadhaar Number</th>
						<td>". $row["username"]."</td>
					</tr>
					<tr>
						<th>Name</th>
						<td>". $row["fname"]. " " . $row["lname"] ."</td>
					</tr>
					<tr>
						<th>Phone Number</th>
						<td>".$row["phone"]."</td>
					</tr>
					<tr>
						<th>Guardian Phone Number</th>
						<td>".$row["gphone"]."</td>
					</tr>";
				?>	
				</table>
				<h2 align="center">Reports</h2>

<?php

$con=mysqli_connect("localhost","root","","u153965993_usrd");

if(isset($_GET['id'])) { // if id is set then get the file with the id from database

$id = $_GET['id'];

$query = "SELECT name, type, size, content FROM files WHERE id = $id";

$result = mysqli_query($con,$query) or die('Error, query failed');

list($name, $type, $size, $content) =

mysqli_fetch_array($result);

header("Content-length: $size");

header("Content-type: $type");

header("Content-Disposition: attachment; filename=$name");

echo $content; exit;

}

?>
				
				
<?php

$query = "SELECT id, name FROM files WHERE username= $login_session";

$result = mysqli_query($con,$query) or die('Error, query failed');

if(mysqli_num_rows($result) == 0)

{

echo "Database is empty";

}

else

{

while(list($id, $name) = mysqli_fetch_array($result))

{

?>
<br>
<a href="download.php?id=<?php echo $id;?>"target="_blank"><?php echo $name; ?></a>

<?php

}

}

?>

        </font>           
                </div>	
            </div>
        </div>
<!--End of code -->	
		
		
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
<?php
$conn->close();
?>
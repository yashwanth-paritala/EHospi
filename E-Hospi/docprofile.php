<?php
include('docsession.php');
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
                                <li class="active"><a href="#">HOME</a></li>                                                                        
                            </ul>
                        </div><!--/.nav-collapse -->
                         
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
		<hr>
		
		<div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">View Patient's Reports</span>
					<br>
					<br>
		
	
				
<table>
		<font size="2">
<form method="post" enctype="multipart/form-data" onSubmit="return validate(this);">
<table style="border-width:5px;	border-style:hidden; width:75%; height:100%; font-size:20px; font-family:sans-serif,comic sans;" >
<tr>
	<td>Enter Patients Aadhaar No: </td>
	<td><input type="number" class="pass" name="usrname" required /></td>
</tr>
<tr>
<td></td>
<td><input id="upload" type="submit" name="submit" class="button" value="submit" /></td>
</tr>
<?php
extract($_POST);
if(isset($_POST['usrname'])){
$username=$_POST['usrname'];
$conn = new mysqli("localhost", "root", "", "u153965993_usrd");
$sql = "SELECT * FROM login WHERE username= $username ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row == FALSE){
	echo "<h2>Invaild User name</h2>";
}
else{
echo '<table style="border-width:5px;	border-style:hidden; width:100%; height:100%; font-size:20px; font-family:sans-serif,comic sans;" >
					
					
					<tr>
						<th>Aadhaar Number</th>
						<td>'. $row["username"]."</td>
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
					</tr></table><br>";
}
?>
</table>
</font>
<br>
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
		<font size="3">		

<?php
$query = "SELECT id, name FROM files WHERE username= $username";

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
<a href="download.php?id=<?php echo $id;?>"target="_blank"><?php echo $name; ?></a><br>

<?php

}

}
}
?>

</form>
</font>
		
                   
                </div>	
            </div>
        </div>
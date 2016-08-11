<?php
include('datasession.php');
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
		
		
		<script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
		<script>
		var ck_username= /^[A-Za-z0-9!@#$%^&*()_]{16}$/;

	function validate(form){	
		var errors = [];
		
		var username = form.username.value;
		if (!ck_username.test(username)) {
			errors[errors.length] = "You must enter a valid Aadhaar no 16 numbers .";
		}
		
		if (errors.length > 0) {
			alert("Invaild Username");
			return false;
		}
		return true;
	}
		</script>
		
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
                         
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
		<hr>
		
		<div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Patient Report Uploading Center</span>
					<br>
					<br>
					
					

<?php if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)

{
$username= $_POST['usrname'];

$fileName = $_FILES['userfile']['name'];

$tmpName  = $_FILES['userfile']['tmp_name'];

$fileSize = $_FILES['userfile']['size'];

$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');

$content = fread($fp, filesize($tmpName));

$content = addslashes($content);

fclose($fp);

if(!get_magic_quotes_gpc())

{

$fileName = addslashes($fileName);

}

$con=mysqli_connect("localhost","root","","u153965993_usrd");

$query = "INSERT INTO files (username,name, size, type, content ) ".

"VALUES ('$username','$fileName', '$fileSize', '$fileType', '$content')";

mysqli_query($con,$query) or die('Error, query failed');

echo "
File $fileName uploaded
";

}

?>
<font size="2">
<form method="post" enctype="multipart/form-data" onSubmit="return validate(this);">
<table style="border-width:5px;	border-style:hidden; width:75%; height:100%; font-size:20px; font-family:sans-serif,comic sans;" >
<tr>
	<td>Enter Patients Aadhaar No: </td>
	<td><input type="number" class="pass" name="usrname" required /></td>
</tr>

<tr>
<td><input type="hidden" name="MAX_FILE_SIZE" value="2000000" /></td>
<td><input id="userfile" type="file"  class="button" name="userfile" required /></td>
<td><input id="upload" type="submit" name="upload" class="button" value=" Upload " /></td>
</tr>
</table>

</form>
</font>
		
                   
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
		
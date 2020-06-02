<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Register | Online Quiz System</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="lcs/style.css"></link>
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(white.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
	</head>
 

<?php
session_start();
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{



//  <div class="col-md-4" bg-danger>
//<br><br><br><img src="" width="70%" height="50%" align="middle"></div>
//*********************************************testing start*******************************
    echo '<center><h2 style="color:#fff;font-size:50px;">WELCOME TO ONLINE QUIZ</h2></center>
    <div class="container">
      <img src="men.png" />
        <div class="font-input">
          <h3><a href="showtest.php" class="style9">Subject for Quiz </a>

          </h3>
        </div><br><br>
        <div class="font-input">
           <h3><a href="result.php" class="style9">Result </a></h3>
        </div>
    </div>';
    exit;
}
?>


<body style="background-image:url('https://media.giphy.com/media/xT9IgN8YKRhByRBzMI/giphy.gif')">
  <center><h2 style="color:#fff;font-size:50px;">WELCOME TO ONLINE QUIZ</h2></center>
    <div class="container">
      <img src="men.png" />
      <form method="post" >
        <div class="font-input">
          <input type="TEXT" name="loginid" id="loginid2" placeholder="Enter Login id">
        </div>
        <div class="font-input">
          <input type="password" name="pass" id="pass2" placeholder="Enter Password">
        </div>
        <input type="submit" name="submit" id="submit" value="Login" href="quiz.php" class="btn-login"><br></br><br></br>
        
        <a style="text-decoration:none" href="signup.php" class="btn-login">NEW USER REGISTER HERE</a>
      </form>
    </div>
  </body>


</html>

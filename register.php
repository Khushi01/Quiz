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
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
	</head>

<body>
<?php
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
 echo "<h1 class='text-center bg-danger' class='navbar-brand'> Welcome to Online Exam </h1>";
	echo'<table width="40%"  border="0" align="center">
  <tr>
    <td width="70%" height="65%" valign="bottom">
    <img src="image/HLPBUTT2.JPG" width="60%" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF">
    <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43%" height="43%" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';
   exit;
}
?>
<section class="login first grey">
	<div class="container">
		<div class="box-wrapper">				
			<div class="box box-border">
				<div class="box-body">

<table width="100%" border="0">
  
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">WELCOME TO ONLINE QUIZ</h1>
      <span class="style5"><img src="image/11.jpg" width="129" height="100"></span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p align="center" class="style5">
          <span class="style7">Welcome to Online 
            exam,this Site will provide the quiz for various subject of interest. 
            You need to login for the take the online exam.</span></p>
      </blockquote>
    </div></td>
    		<table align="center" border="0" WIDTH="50%" height="250">
			<h1 align="center">LOGIN PAGE</h1>
		<form method="post" action="">
		<center>
		<img class="img-circle" src="image/12.png"  title="this is my profile pic" width="260px" 
		  height="190px" border="1" />
		</center>	<br>
	
				<div class="form-group">
					<lable>LOGIN ID</lable>
					<input class="form-control"type="TEXT" title="enter your regitered LOGIN ID"  
					    placeholder="Login Id"  maxlength="10" size="25" 
					    id="loginid2" name="loginid"/>
					</div>
				
				
					<div class="form-group">
					<lable>ENTER PASSWORD</lable>
					<input class="form-control" type="password" name="pass" id="pass2" 
					   placeholder="Enter password" />
					</div>
	<?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
         <th></th>
				<div class="errors" align="center">
				<input class="btn btn-danger" type="submit" name="submit" id="submit" value="Login" 
				 href="quiz.php"/></br>
				 </br><a class="btn btn-success" href="signup.php">New user ? click here</a></div>
      </table>
   <!--   <div align="center">
        <p class="style5"><img src=" " width="134" height="128"></p>    image remover 
        </div>  !---->
    </form></td>
  </tr>
</table>
<!--<iframe src="https://www.classmarker.com/online-test/start/?quiz=yba59c342adc8815" frameborder= "0" style="width:100%;max-width:1170px;" height="800">
</iframe>--->


						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>
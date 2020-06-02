<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="apple-touch-icon" href="c/apple-touch-icon.png"> 
  <link rel="stylesheet" href="c/css/bootstrap.min.css">
  <link rel="stylesheet" href="c/css/normalize.css">
  <link rel="stylesheet" href="c/css/font-awesome.min.css">
  <link rel="stylesheet" href="c/css/icomoon.css">
  <link rel="stylesheet" href="c/css/jquery-ui.css">
  <link rel="stylesheet" href="c/css/owl.carousel.css">
  <link rel="stylesheet" href="c/css/transitions.css">
  <link rel="stylesheet" href="c/css/mainn.css">
  <link rel="stylesheet" href="c/css/color.css">
  <link rel="stylesheet" href="c/css/responsive.css">
  <link rel="stylesheet" href="c/css/style1.css">


	
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
                  background: url(image/4q.jpg) ;
                  
                }
          </style>


</head>
<body>
<?php
include("header.php");
include("database.php");
?>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
  <aside id="tg-sidebar" class="tg-sidebar">
    <div class="tg-widget tg-languages">
      <div class="tg-widgettitle">
        <h3 align="center">Topics</h3>
      </div>
            <div class="tg-widgetcontent">
              <ul>
                <?php
                $rs=mysqli_query($con,"select * from mst_subject");
                echo "<table>";
                while($row=mysqli_fetch_row($rs))
                {
                echo "<tr><td align=left ><a href=showtest.php?subid=$row[0]><font size=5>$row[1]</font></a>";
                }
                echo "</table>";
                ?>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
 </div>
</div>




</body>
</html>

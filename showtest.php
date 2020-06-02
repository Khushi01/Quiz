<?php
session_start();
include("header1.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">

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





</head>
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
                  // extract($_GET);
                  // $rs1=mysqli_query($con,"select * from mst_subject ");
                  // $row1=mysqli_fetch_array($rs1);
                  // echo "<h1 align=center class=tg-widgettitle><font color=blue> $row1[1]</font></h1>";
                  $rs=mysqli_query($con,"select * from mst_test");
                  if(mysqli_num_rows($rs)<1)
                  {
                    echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
                    exit;
                  }
                  // echo "<h2 class=head> Select Quiz Name to Give Quiz </h2>";
                  echo "<table align=left>";

                  while($row=mysqli_fetch_row($rs))
                  {
                    echo "<tr><td align=left ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4ss>$row[2]</font></a>";
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

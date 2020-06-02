<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
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
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-success">
<?php
include("header.php");
?>

<div>
   <div class="tg-sectionspace tg-haslayout">
        <div class="container">
          <div class="row">
            <div class="tg-contactus">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-sectionhead">
                                <h2>REGISTRATION PAGE</h2><br>
                               
                  
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img src="image/contact1.png">

              </div>


              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form class="tg-formtheme tg-formcontactus" action="signupuser.php" onSubmit="return check();" method="post">
                  <fieldset>
                    <div class="form-group">
                      <input type="text" name="lid" class="form-control" placeholder="LOGIN ID" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Confirm Password" name="cpass" id="cpass"required>
                    </div>
                    <div class="form-group">
                      <input name="name" type="text" id="name" class="form-control" placeholder="Name" required>
                    </div>
                     
                     <div class="form-group">
                      <input name="city" type="text" id="city" class="form-control" placeholder="City*" required>
                    </div>

                  
                    <div class="form-group">
                      <input name="phone" type="text" id="phone" class="form-control" placeholder="Mobile*" min='6066666666' required >
                    </div>
                                        
                    <div class="form-group">
                      <input name="email" type="text" id="email" class="form-control" placeholder="Email*" required>
                    </div>
                                        
                                        
                    <div class="form-group">
                      <input type="date" name="dob" class="form-control" placeholder="DOB (optional)">
                    </div>
                    <div class="form-group tg-hastextarea" >
                      <textarea placeholder="Address*" name="address" id="address" required style="height: 100px width: 100px" ></textarea></div>

                   
                    <!-- <div class="form-group">
                      <input class="btn btn-danger" type="submit" name="Submit" value="Signup">
                    </div>
  -->                   <td>&nbsp;</td>
                    <td><input class="btn btn-danger" type="submit" name="Submit" value="Signup">
                    </td>
                    <!-- <span class="btn color-1 float-left mb-5">Submit</span> -->
                                       <!--  <br>
                                        <h4><a href='user_login.php'> If already registered Click here to Login</a></h4> -->
                  </fieldset>
                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 <!-- <table width="100%" border="0">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"><img src="images/connected_multiple_big.jpg" width="131" height="155"></span></td>
     <h1 class="text-center bg-primary">REGISTRACTION PAGE</h1>
   </tr>
   <tr>
     <td><form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
       <center>
		<img class="img-circle" src="2.jpg"  width="240px" height="190px" border="1" />
		</center>	<br>
			<table class=" table table-striped">
		
         <tr>
           <td class="style7">LOGIN ID</div></td>
           <td><input class="form-control"type="text" name="lid"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input class="form-control"type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7" >Confirm Password </td>
           <td><input class="form-control" name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input class="form-control" name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Address</td>
           <td><textarea class="form-control" name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style7">City</td>
           <td><input class="form-control" name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Phone</td>
           <td><input class="form-control" name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input class="form-control" name="email" type="text" id="email"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input class="btn btn-danger" type="submit" name="Submit" value="Signup">
           </td>
         </tr>
       </table> -->
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>
</body>
</html>

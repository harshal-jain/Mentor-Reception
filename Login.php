<?php
include("connection.php");

if(isset($_REQUEST["btn_Submit"]))
{ 
	$sql="SELECT * FROM tbl_signup where Phone='".$_REQUEST["txt_Phone"]."' and password='".$_REQUEST["txt_Password"]."'";
	$tbl=mysqli_query($con,$sql);
	if($tbl)
		if(mysqli_affected_rows($con)>0)
		{
			$_SESSION["PhoneNo"]=$_REQUEST["txt_Phone"];			
			header("Location:Home.php");
			//echo "";
		}
		else
		{
			echo "either loginid or password is wrong";
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body>
<form method="post" action="">
<table width="200" border="1">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
    <tr>
    <td>Phone</td>
    <td><input type="text" name="txt_Phone" /> </td>
  </tr>
    <tr>
    <td>Password</td>
    <td><input type="text" name="txt_Password" /> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn_Submit" value="Submit" /></td>
  </tr>
</table>
</form>
</body>
</html>

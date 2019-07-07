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
			header("Location:EntryPage.php");
			//echo "";
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
<form method="post" action="EntryPage.php">
<table width="200" border="1">
<tr>
    <td>Entry Page</td>
    <td><input type="submit"  name="btn_Submit" value="Click"  /></td>
  </tr> 

</table>
</form>

</body>
</html>

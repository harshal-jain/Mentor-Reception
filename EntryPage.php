<?php

include("connection.php");


if(isset($_REQUEST["btn_Submit"]))
{
	$sql="INSERT INTO tbl_entrypage (S_M ,Area , Date_Place  , File_Number  , U1  , U2   ,  U3  , U4   , U5   ,B_M	,B_D_M	,Name_of_Borrower  ,	Name_of_Co_Borrower_1	,Name_of_Co_Borrower_2,Name_of_Co_Borrower_3,Residential_Address,Name_of_Guarantor	,Sanctioned_Amount_numbers	,Sanctioned_Amount_words	,Tenure_in_months	,Monthly_installment	,EMI_Starts_From	,IRR	,Rate_of_Interest_Fixed_Float,Purpose_of_Loan	,Type_of_Property	,Name_of_Property_Owner	,Property_Address	,Additional_Security) VALUES ('".$_REQUEST["txt_S_M"]."','".$_REQUEST["txt_Area"]."','".$_REQUEST["txt_A"]."','".$_REQUEST["txt_B"]."','".$_REQUEST["txt_U1"]."','".$_REQUEST["txt_U2"]."','".$_REQUEST["txt_U3"]."','".$_REQUEST["txt_U4"]."','".$_REQUEST["txt_U5"]."','".$_REQUEST["txt_B_M"]."','".$_REQUEST["txt_B_D_M"]."','".$_REQUEST["txt_C"]."','".$_REQUEST["txt_D"]."','".$_REQUEST["txt_E"]."','".$_REQUEST["txt_F"]."','".$_REQUEST["txt_G"]."','".$_REQUEST["txt_H"]."','".$_REQUEST["txt_I"]."','".$_REQUEST["txt_J"]."','".$_REQUEST["txt_K"]."','".$_REQUEST["txt_L"]."','".$_REQUEST["txt_M"]."','".$_REQUEST["txt_N"]."','".$_REQUEST["txt_O"]."','".$_REQUEST["txt_P"]."','".$_REQUEST["txt_Q"]."','".$_REQUEST["txt_R"]."','".$_REQUEST["txt_S"]."','".$_REQUEST["txt_T"]."')";
	
    mysqli_query($con,$sql);
	
	$sql="SELECT MAX(id) as id FROM tbl_entrypage";
	$tbl=mysqli_query($con,$sql);

if($tbl)
{
	if($row=mysqli_fetch_array($tbl))
	{
		$_SESSION["id"]= $row["id"];
	}
}
header("Location:SL_Front.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" >

<table width="50%" border="1">
  <tr>
    <td><button onclick="printabc()">PRINT</button></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>S.M</strong></td>
    <td><input type="text" name="txt_S_M" /></td>
    <td>EMP Code </td>
  </tr>
  <tr>
    <td><strong>B.M</strong></td>
    <td><input type="text" name="txt_B_M" /></td>
    <td>EMP Code</td>
  </tr>
  <tr>
    <td><strong>B.D.M</strong></td>
    <td><input type="text" name="txt_B_D_M" /></td>
    <td>EMP Code</td>
  </tr>
  <tr>
    <td>Area</td>
    <td><input type="text" name="txt_Area" /></td>
    <td>EMP Code</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="50%" border="1">
  <tr>
    <td>Date-Place</td>
    <td><input type="text" name="txt_A" /></td>
  </tr>
  <tr>
    <td>File Number</td>
    <td><input type="text" name="txt_B" /></td>
  </tr>
  <tr>
    <td>Name of Borrower</td>
    <td><input type="text" name="txt_C" /></td>
  </tr>
  <tr>
    <td>Name of Co-Borrower(1)</td>
    <td><input type="text" name="txt_D" /></td>
  </tr>
  <tr>
    <td>Name of Co-Borrower(2)</td>
    <td><input type="text" name="txt_E" /></td>
  </tr>
  <tr>
    <td>Name of Co-Borrower(3)</td>
   <td><input type="text" name="txt_F" /></td>
  </tr>
  <tr>
    <td>Residential Address</td>
   <td><input type="text" name="txt_G" /></td>
  </tr>
  <tr>
    <td>Name of Guarantor</td>
    <td><input type="text" name="txt_H" /></td>
  </tr>
  <tr>
    <td>Sanctioned Amount(numbers)</td>
   <td><input type="text" name="txt_I" /></td>
  </tr>
  <tr>
    <td>Sanctioned Amount(words)</td>
    <td><input type="text" name="txt_J" /></td>
  </tr>
  <tr>
    <td>Tenure in months </td>
    <td><input type="text" name="txt_K" /></td>
  </tr>
  <tr>
    <td>Monthly installment </td>
    <td><input type="text" name="txt_L" /></td>
  </tr>
  <tr>
    <td>EMI Starts From</td>
    <td><input type="text" name="txt_M" /></td>
  </tr>
  <tr>
    <td>IRR</td>
  <td><input type="text" name="txt_N" /></td>
  </tr>
  <tr>
    <td>Rate of Interest Fixed/Float </td>
    <td><input type="text" name="txt_O" /></td>
  </tr>
  <tr>
    <td>Purpose of Loan </td>
    <td><input type="text" name="txt_P" /></td>
  </tr>
  <tr>
    <td>Type of Property</td>
    <td><input type="text" name="txt_Q" /></td>
  </tr>
  <tr>
    <td>Name of Property Owner</td>
    <td><input type="text" name="txt_R" /></td>
  </tr>
  <tr>
    <td>Property Address</td>
    <td><input type="text" name="txt_S" /></td>
  </tr>
  <tr>
    <td>Additional Security</td>
    <td><input type="text" name="txt_T" /></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><strong>Description of Immovable property papers  </strong></div></td>
    </tr>
  <tr>
    <td><div align="center"><strong>Type of Paper </strong></div></td>
    <td><div align="center"><strong>No.of Pages  </strong></div></td>
  </tr>
  <tr>
    <td><input type="text" name="txt_U1" /></td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <td><input type="text" name="txt_U2" /></td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <td><input type="text" name="txt_U3" /></td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <td><input type="text" name="txt_U4" /></td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <td><input type="text" name="txt_U5" /></td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <td>Total Number Of Pages </td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn_Submit" value="Submit" /></td>
  </tr>
</table>
</form>
<script>
function printabc()
 {
  window.print();
}
</script>

</body>
</html>

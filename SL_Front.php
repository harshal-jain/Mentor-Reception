<?php
include("connection.php");


$sql="SELECT * FROM tbl_entrypage WHERE id=".$_SESSION["id"];

$tbl=mysqli_query($con,$sql);

if($tbl)
{
	while($row=mysqli_fetch_array($tbl))
	{
		 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="77%" border="1">
  <tr>
    <td width="41%" height="69">&nbsp;</td>
    <td width="59%"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="23" width="365"><strong>Sanction    Letter</strong></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="81">07-05-2019</td>
      </tr>
    </table></td>
    <td><?php echo $row["Date_Place"] ?></td>
  </tr>
  <tr>
    <td>MIL/HL/CON/MHL</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365"><?php echo $row["File_Number"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>Name of Borrower</td>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
  </tr>
  <tr>
    <td>Name of Co-Borrower(1)</td>
    <td><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td>Name of Co-Borrower(2)</td>
    <td><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
  </tr>
  <tr>
    <td>Name of Co-Borrower(3)</td>
    <td><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
  </tr>
  <tr>
    <td>Residential Address</td>
    <td><?php echo $row["Residential_Address"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Subject</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><p>Dear Sir/Madam, Congratulations !
    </p>
      <table cellspacing="0" cellpadding="0">
        <col width="278" />
        <col width="365" />
        <tr height="20">
          <td colspan="2" rowspan="4" height="74" width="793">This is inform you that your application for Home Loan /    Construction Loan/ Mortgage Loan/Loan against Property is sanctioned by    MENTOR FINMART PRIVATE LIMITED and provided you the required amount as per    the AGREEMENT which is signed by you. The detail of loan sanctioned is given    below:</td>
        </tr>
        <tr height="18"> </tr>
        <tr height="18"> </tr>
        <tr height="18"> </tr>
          </table></td>
  </tr>
  
  <tr>
    <td>Agreement Number</td>
    <td><?php echo $row["File_Number"] ?></td>
  </tr>
  <tr>
    <td>Sanctioned Amount(numbers)</td>
    <td><?php echo $row["Sanctioned_Amount_numbers"] ?></td>
  </tr>
  <tr>
    <td>Sanctioned Amount(words)</td>
    <td><?php echo $row["Sanctioned_Amount_words"] ?></td>
  </tr>
  <tr>
    <td>Tenure in months </td>
    <td><?php echo $row["Tenure_in_months"] ?></td>
  </tr>
  <tr>
    <td>Monthly installment </td>
    <td><?php echo $row["Monthly_installment"] ?></td>
  </tr>
  <tr>
    <td>EMI Starts From</td>
    <td><?php echo $row["EMI_Starts_From"] ?></td>
  </tr>
  <tr>
    <td>IRR</td>
    <td><?php echo $row["IRR"] ?></td>
  </tr>
  <tr>
    <td>Rate of Interest Fixed/Float </td>
    <td><?php echo $row["Rate_of_Interest_Fixed_Float"] ?></td>
  </tr>
  <tr>
    <td>Mode of payment </td>
    <td>Cheque/NACH</td>
  </tr>
  <tr>
    <td>Fixed Deposit if any</td>
    <td>NIL</td>
  </tr>
  <tr>
    <td>Additional Security(s)</td>
    <td><?php echo $row["Additional_Security"] ?></td>
  </tr>
  <tr>
    <td>Purpose of Loan </td>
    <td><?php echo $row["Purpose_of_Loan"] ?></td>
  </tr>
  <tr>
    <td>Type of the property </td>
    <td><?php echo $row["Type_of_Property"] ?></td>
  </tr>
  <tr>
    <td>Property Owner</td>
    <td><?php echo $row["Name_of_Property_Owner"] ?></td>
  </tr>
  <tr>
    <td>Property Address</td>
    <td><?php echo $row["Property_Address"] ?></td>
  </tr>
  <tr>
    <td>Documents submitted </td>
    <td>As per list</td>
  </tr>
  <tr>
    <td colspan="2"><p>*Please quote your Agreement number for further correspondence, in case of any doubt, please call at the above telephone number or meet physically in the office.</p>
    <p>*Please sign the office copy of sanction letter and T&amp;C for acceptance of the loan and submit the required documents for disbursement. Please note that you will be updated through SMS/Voice message about your home loan and the Mentor Group activities.</p></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <col width="365" />
      <tr height="18">
        <td rowspan="2" height="36" width="365">The    above terms and Conditions are to our satisfaction. I/We accept and abide    with the same.</td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="3"><table cellspacing="0" cellpadding="0">
      <col width="365" />
      <tr height="18">
        <td rowspan="4" height="74" width="365" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="74" width="365"><div align="center"><img src="SL_Front_clip_image002_0000.png" alt="abcd" width="29" height="29" align="left" />signature</div></td>
              </tr>
          </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="20"> </tr>
    </table></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>FOR MENTOR FINMRT PVT LTD </td>
  </tr>
  <tr>
    <td rowspan="2"><div align="center">signature</div></td>
    <td height="29">SIGNATURE OF BORROWER </td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
        <col width="365" />
        <tr height="18">
          <td rowspan="4" height="72" width="365" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="72" width="365"><div align="center"><img src="SL_Front_clip_image002_0001.png" alt="ASQW" width="16" height="18" align="left" />signature</div></td>
              </tr>
            </table></td>
        </tr>
        <tr height="18"> </tr>
        <tr height="18"> </tr>
        <tr height="18"> </tr>
        </table></td>
  </tr>
  
  <tr>
    <td>AUTHORIZED SIGNATORY </td>
    <td>SIGNATURE OF CO-BORROWER(S) </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
}
}

?>
</body>
</html>

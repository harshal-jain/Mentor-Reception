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

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table, tr, td {
  border: thin;
  border-collapse: collapse;
  
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<script>
function printDiv(divName) {
     var printContents = document.getElementById('SL_Front','SL_Back').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;
  	 window.print();
     document.body.innerHTML = originalContents;
}
</script>



</head>

<body>
<form method="post" >

<table width="50%" border="1"  >
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
    <td height="28">&nbsp;</td>
    <td><input type="submit" name="btn_Submit" value="Submit" /><input type="button" onclick="printDiv('printableArea')" value="print a div!" /></td>
  </tr>
</table>
</form>


<!-- SL_Front.php-->

<div id="SL_Front" style="visibility:hidden">
<?php
$sql="SELECT * FROM tbl_entrypage WHERE id=".$_SESSION["id"];

$tbl=mysqli_query($con,$sql);

if($tbl)
{
	while($row=mysqli_fetch_array($tbl))
	{
		 

?>
<!-- SL_Front.php-->
<font size="1.7" face='Arial'>
<table width="100%" height="1013" border="1">
  <tr>
    <td width="41%" height="31">&nbsp;</td>
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
    <td>Subject</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><p>Dear Sir/Madam, Congratulations !This is inform you that your application for Home Loan /    Construction Loan/ Mortgage Loan/Loan against Property is sanctioned by    MENTOR HOME LOANS INDIA LIMITED and provided you the required amount as per    the AGREEMENT which is signed by you. The detail of loan sanctioned is given    below:</p>    </td>
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
    <td colspan="2"><p>*Please quote your Agreement number for further correspondence, in case of any doubt, please call at the above telephone number or meet physically in the office. *Please sign the office copy of sanction letter and T&amp;C for acceptance of the loan and submit the required documents for disbursement. Please note that you will be updated through SMS/Voice message about your home loan and the Mentor Group activities.</p>    </td>
  </tr>
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td>The    above terms and Conditions are to our satisfaction. I/We accept and abide    with the same.</td>
  </tr>
  <tr>
    <td rowspan="2"><div align="center"><img src="SL_Front_clip_image002_0000.png" alt="abcd" width="29" height="29" align="left" />signature</div></td>
  </tr>
  
  <tr>
    <td height="27">FOR MENTOR FINMRT PVT LTD </td>
  </tr>
  <tr>
    <td rowspan="2"><div align="center">signature</div></td>
    <td height="23">SIGNATURE OF BORROWER </td>
  </tr>
  <tr>
    <td height="54"><div align="center"><img src="SL_Front_clip_image002_0001.png" alt="ASQW" width="16" height="18" align="left" />signature</div></td>
  </tr>
  
  <tr>
    <td height="23">AUTHORIZED SIGNATORY </td>
    <td>SIGNATURE OF CO-BORROWER(S) </td>
  </tr>
</table>
<P style="page-break-before: always">
<!-- SL_Back.php-->
<table width="100%" border="1">
  <tr>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="18" width="634"> <div align="right"><strong>TERMS    &amp; CONDITIONS FOR HOUSING FINANCE / &#2310;&#2357;&#2366;&#2360; &#2325;&#2375; &#2354;&#2367;&#2319; &#2344;&#2367;&#2351;&#2350; &#2319;&#2357;&#2306; &#2358;&#2352;&#2381;&#2340;&#2375;&#2306;</strong></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="49%"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Visiting    Hours</td>
      </tr>
    </table></td>
    <td width="51%"><table cellspacing="0" cellpadding="0">
      <tr>
        <td  height="18" width="365">3.00 to 5 PM</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Business    Hours</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">9.30 to    7.00 PM</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Customer    Care</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Contact    Customer Care Counter</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Procedure    to Obtain</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Loan    Account Statement</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">3    Working days after customer request.</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Return    of Original Documents</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">21 Days    after final Payment</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Interest Rate/&#2348;&#2381;&#2351;&#2366;&#2332; &#2342;&#2352;</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">AS PER    SANCTION</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Default Interest rate/&#2337;&#2367;&#2347;&#2364;&#2377;&#2354;&#2381;&#2335; &#2348;&#2381;&#2351;&#2366;&#2332;    &#2342;&#2352;</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">60%</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>Repayment EMI Frequency/fdLr pqdkus    dh vko`fr&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">EVERY MONTH/gj efgus&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>Default/Cheque Return/ECS debit/&#2337;&#2367;&#2347;&#2364;&#2377;&#2354;&#2381;&#2335;/&#2330;&#2376;&#2325;    &#2357;&#2366;&#2346;&#2360;&#2368;/fdLr okilh</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="37" width="365">Rs 1000</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Pre-Payment Charges/&#2346;&#2370;&#2352;&#2381;&#2357; &#2349;&#2369;&#2327;&#2340;&#2366;&#2344; djus ij&nbsp;</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" align="left" width="365">3-5%</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Cheque Swap Charges/&#2330;&#2376;&#2325; cnyus ij&nbsp;</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Rs 500</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Statement Charges/fooj.k 'kqYd&nbsp;</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Rs 200</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>Papers to be submitted before disburshment / &#2325;&#2366;&#2327;&#2332; &#2309;&#2342;&#2366;&#2351;&#2327;&#2368; &#2360;&#2375; &#2346;&#2361;&#2354;&#2375; &#2346;&#2381;&#2352;&#2360;&#2381;&#2340;&#2369;&#2340; &#2325;&#2367;&#2351;&#2366;    &#2332;&#2366;&#2344;&#2366; &#2361;&#2376;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="36" width="365">As per    companys requirement/dEiuh dh vko';drkuqlkj</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Disbursement/&#2309;&#2342;&#2366;&#2351;&#2327;&#2368;</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">One    Time/ ,d ckj&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>Foreclosure of the account/[kkrk cUn djokuk</td>
    <td>Forecloser    will not be allowed before 12 EMI has been deposited/12&nbsp; fdLrks ls igys yksu dks [kRe ugh fd;k tk    ldrk Gsa</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Insurance/&#2348;&#2368;&#2350;&#2366;</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">By the    Borrower for entire term/iwjh vof/k ds fy, x`ghrk )kjk</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td rowspan="3"><table cellspacing="0" cellpadding="0">
      <col width="269" />
      <tr height="18">
        <td rowspan="3" height="54" width="269">Recovery Procedure</td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">*    Company notice/SMS for 1 Due EMI</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">*    Personal Visit/SMS for 3 Due EMI&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">* Legal    Recovery procedure.</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Grievance    Redressal</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Branch    head of respective Branch.</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td rowspan="2"><table cellspacing="0" cellpadding="0">
      <col width="269" />
      <tr height="18">
        <td rowspan="2" height="36" width="269">If not convinced, please contact at this.</td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Post at    the Companys Registered Address</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">E :    grievance.cell@mentorindiagroup.com</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="19" width="269">Turn    around time&nbsp;</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">21    working days</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2" height="18">We    accept all the terms and condition in the agreement.</td>
  </tr>
  
  <tr>
    <td colspan="2" height="20">&#2361;&#2350;    vuqcU/k ds &#2360;&#2349;&#2368; &#2344;&#2367;&#2351;&#2350; &#2324;&#2352; &#2358;rsa Lohdkj djrs gSaA</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <col width="269" />
      <tr height="18">
        <td rowspan="5" height="90" width="269" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="5" height="90" width="269"><div align="center"><img src="SL_Back_clip_image002.png" alt="ASDADSSAD" width="30" height="26" align="left" />signature</div></td>
              </tr>
          </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><div align="center"><img src="SL_Back_clip_image002_0002.png" alt="qw" width="16" height="17" align="left" />signature</div></td>
  </tr>
  
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Borrower</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Co-Borrower(s)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
    <td><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td height="24"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<P style="page-break-before: always">
<!-- LA Last Page.php-->
<table width="100%" border="1">
  <tr>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <col width="286" />
      <col width="350" />
      <tr height="20">
        <td colspan="2" rowspan="2" height="38" width="977"><p><strong>IN WITNESS WHEREOF</strong>    the parties hereto have executed/caused to be executed this agreement as of    the date first above written in the manner herein after appearing.</p>          </td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="419">Signed    and Delivered by the Borrower(s)</td>
        <td width="217">For Individual(s):</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="3"><table cellspacing="0" cellpadding="0">
      <col width="350" />
      <tr height="18">
        <td rowspan="4" height="73" width="350" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="73" width="350"><div align="center"><img src="LA_LAST_PAGE_clip_image002_0000.png" alt="asqwed" width="30" height="26" align="left" />signature</div></td>
              </tr>
          </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="19"> </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr>
    <td height="45"><table cellspacing="0" cellpadding="0">
        <tr>
          <td height="19" width="286">(Signature    of Borrower)&nbsp; &rarr;&rarr;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
  </tr>
  <tr>
    <td height="29"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="286">Name of    Borrower</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="3"><table cellspacing="0" cellpadding="0">
        <col width="350" />
        <tr height="18">
          <td rowspan="4" height="73" width="350" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="73" width="350"><div align="center"><img src="SL_Back_clip_image002_0002.png" alt="qw" width="16" height="17" align="left" />signature</div></td>
              </tr>
          </table></td>
        </tr>
        <tr height="18"> </tr>
        <tr height="19"> </tr>
        <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="19" width="286">(Signature    of Co-Borrower-1)&nbsp; &rarr;&rarr;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="286">Name of    Co-Borrower(1)</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="3"><table cellspacing="0" cellpadding="0">
        <col width="350" />
        <tr height="18">
          <td rowspan="4" height="73" width="350" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="73" width="350"><div align="center"><img src="SL_Back_clip_image002_0002.png" alt="qw" width="16" height="17" align="left" />signature</div></td>
              </tr>
          </table></td>
        </tr>
        <tr height="18"> </tr>
        <tr height="19"> </tr>
        <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="19" width="286">(Signature    of Co-Borrower-2)&nbsp; &rarr;&rarr;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="286">Name of    Co-Borrower(2)</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="3"><table cellspacing="0" cellpadding="0">
        <col width="350" />
        <tr height="18">
          <td rowspan="4" height="73" width="350" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="73" width="350"><div align="center"><img src="SL_Back_clip_image002_0002.png" alt="qw" width="16" height="17" align="left" />signature</div></td>
              </tr>
          </table></td>
        </tr>
        <tr height="18"> </tr>
        <tr height="19"> </tr>
        <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="19" width="286">(Signature    of Co-Borrower-3)&nbsp; &rarr;&rarr;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="286">Name of    Co-Borrower(3)</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="3"><table cellspacing="0" cellpadding="0">
        <col width="350" />
        <tr height="18">
          <td rowspan="4" height="73" width="350" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="73" width="350"><div align="center">signature</div></td>
              </tr>
          </table></td>
        </tr>
        <tr height="18"> </tr>
        <tr height="19"> </tr>
        <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="19" width="286">(Signature    of Property Owner)&nbsp; &rarr;&rarr;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="286">Name of    Property Owner</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Property_Owner"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <col width="286" />
      <tr height="18">
        <td rowspan="2" height="36" width="286">Residential Address</td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><?php echo $row["Residential_Address"] ?></td>
  </tr>
  <tr>
    <td height="25"><table cellspacing="0" cellpadding="0">
      <col width="286" />
      <tr height="18">
        <td rowspan="2" height="36" width="286">Property Address</td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><?php echo $row["Property_Address"] ?></td>
  </tr>
</table>
<p><strong>For Mentor Finmart Private Limited:</strong></p>
<table width="34%" border="1">
  <tr>
    <td>Signed and Delivered to </td>
  </tr>
  <tr>
    <td height="23">MENTOR FINMART PVT LTD </td>
  </tr>
  <tr>
    <td><p align="center">signature</p>
      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="286">By the    hands of its Authorised Signatory</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="286">Name of    Authorised Signatory</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="24"><table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="286"><?php echo $row["Date_Place"] ?></td>
        </tr>
    </table></td>
  </tr>
</table>
<P style="page-break-before: always">

<!-- Schedule.php-->
<font size="1" face='Arial'>
<table width="93%" border="1">
  <tr>
    <td height="22" colspan="3"><div align="center"><strong>SCHEDULE</strong></div></td>
  </tr>
  <tr>
    <td width="11%">1</td>
    <td width="51%"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Place    &amp; Date of execution of Agreement</td>
      </tr>
    </table></td>
    <td width="38%"><?php echo $row["Date_Place"] ?></td>
  </tr>
  <tr>
    <td rowspan="6">2</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Description    of Borrower(s):</td>
      </tr>
    </table></td>
    <td>For Individual(s): </td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Name of    Borrower</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Name of    Co-Borrower(1)</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Name of    Co-Borrower(2)</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Name of    Co-Borrower(3)</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <col width="271" />
      <tr height="18">
        <td rowspan="2" height="36" width="271"><div align="right">Residential    Address</div></td>
      </tr>
      <tr height="18"> </tr>
    </table>
      <div align="center"></div>
    <div align="center"></div></td>
    <td><?php echo $row["Residential_Address"] ?></td>
  </tr>
  
  <tr>
    <td>3</td>
    <td>Loan    Amount</td>
    <td><?php echo $row["Sanctioned_Amount_numbers"] ?></td>
  </tr>
  <tr>
    <td>4</td>
    <td colspan="2">Conditions    mentioned at clause 2.2 of the agreement to be satisfied within: [7] days.</td>
  </tr>
  <tr>
    <td rowspan="3">5</td>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Description    of Property:</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Name of    Property Owner</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Property_Owner"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <col width="271" />
      <tr height="18">
        <td rowspan="2" height="36" width="271">Property    Address</td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><?php echo $row["Property_Address"] ?></td>
  </tr>
  <tr>
    <td>6</td>
    <td><table cellspacing="0" cellpadding="0">
      <col width="271" />
      <tr height="18">
        <td rowspan="2" height="36" width="271">Loan    to be availed within: [60] days</td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">6A&nbsp; Cancellation period: [30] days, 6B    Cancellation fee**: Rs. 5000</td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td rowspan="3">7</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271"><strong>Current    interest rate:</strong></td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Fixed/Floating</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>Fixed</td>
    <td>19%</td>
  </tr>
  <tr>
    <td colspan="2">MMFRR (current _______%) plus/minus _______% per annum) Further    the company may at its sole discretion cause an upward revision in the    floating rate of interest. However for accounting convenience, the settlement    would be made as and when the company may decide and the difference would be    adjusted /charged as detailed herein.</td>
  </tr>
  <tr>
    <td rowspan="5">8</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Repayment    schedule of the loan:</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Amount    of each EMI:</td>
      </tr>
    </table></td>
    <td><?php echo $row["Monthly_installment"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Total    number of EMI's:</td>
      </tr>
    </table></td>
    <td><?php echo $row["Tenure_in_months"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Date of    first EMI:</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365"><?php echo $row["EMI_Starts_From"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <col width="271" />
      <tr height="18">
        <td rowspan="2" height="36" width="271">Payment due date of each EMI:&nbsp;</td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <col width="365" />
      <tr height="18">
        <td rowspan="2" height="36" width="365">The    10th  day of every month succeeding    the month in which the first EMI is paid.</td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr>
    <td>9</td>
    <td colspan="2" height="18">Number    of PDCs and/or UDCs mentioned in clause 4.2 (e) of the Agreement: [&nbsp;&nbsp; ]</td>
  </tr>
  <tr>
    <td>10</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Current    Dishonors charges**:</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Rs 1000    for each dishonor of PDC/ECS Debit instruction.</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>11</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Current    swap charges**:</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Rs 500    per event of PDC exchange/new ECS instruction.</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td rowspan="3">12</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271"><strong>Current    prepayment charges**:</strong></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Prepayment    between 0-12 months:</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">No    prepayment allowed**</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" height="18">Prepayment    between 13-24 months (5%), 25-36 months (4%) and after 36 months (3%).</td>
  </tr>
</table>
<p>*At    its sole discretion, the Company may charge minimum 5% + balance interest for    the first year. *In the event pre-payment is requested by the Borrower for    availing a loan facility on the same property from any other bank, financial    institution or entity, the Borrower shall pay an additional pre-payment    charge of 3% of the outstanding Loan over and above the pre-payment charges    stated in the sub-clause 12 above.</p>
<table width="95%" border="1">
  <tr>
    <td width="10%">13</td>
    <td colspan="2">Period    mentioned in Clause 6.5(ix) of the Agreement: [30] days</td>
  </tr>
  <tr>
    <td>14</td>
    <td width="57%">Purpose    of Loan:</td>
    <td width="33%">Construction</td>
  </tr>
  <tr>
    <td>15</td>
    <td>Place of    Arbitration:</td>
    <td>Jaipur,    Rajasthan</td>
  </tr>
  <tr>
    <td rowspan="2">16</td>
    <td colspan="2">Address    of the Company for the purpose mentioned in clause 13 of the Agreement:</td>
  </tr>
  <tr>
    <td colspan="2">A-156, Vidhyut nagar near purani chungi, Ajmer road, Jaipur - 302021 </td>
  </tr>
</table>
<p>*Service    Tax and other statutory charges as applicable would be charged extra.</p>
<table width="89%" border="1">
  <tr>
    <td width="46%" rowspan="3"><p align="center">signature</p>
    <p>&nbsp;</p></td>
    <td width="54%" rowspan="3">&nbsp;</td>
  </tr>
  <tr> </tr>
  <tr> </tr>
  <tr>
    <td>Authorized    Signatory</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Signature    of Borrower &amp; Co-Borrower(s)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>For MENTOR FINMART PVT LTD </td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="365"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</font>
<P style="page-break-before: always">
<font size="1.7" face='Arial'>

<!-- DPN.php-->
<table width="75%" border="1">
  <tr>
    <td><div align="center"><strong>DEMAND    PROMISSORY NOTE</strong></div></td>
  </tr>
</table>
<table width="75%" border="1">
  <tr>
    <td><?php echo $row["Sanctioned_Amount_numbers"] ?></td>
    <td><?php echo $row["Date_Place"] ?></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $row["Sanctioned_Amount_words"] ?></td>
  </tr>
</table>
<table width="75%" border="1">
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="314">On    Demand, I/We</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="314"><?php echo $row["Name_of_Borrower"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="314"><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="314"><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="314"><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>jointly and severally promise to pay to MENTOR FINMART PRIVATE LIMITED (Formerly Mentor Homefin Pvt. Ltd.) (Lender) a company registered</p>
<p> under the provisions of the Companies    Act, 1956 or order at its office/Branch at A-156, VIDHUT NAGAR, AJMER ROAD ,</p>
<p> Jaipur-302004 (Rajasthan) the sum of</p>
<table width="76%" border="1">
  <tr>
    <td><?php echo $row["Sanctioned_Amount_numbers"] ?></td>
    <td><?php echo $row["Sanctioned_Amount_words"] ?></td>
  </tr>
</table>
<p>together with interest from the date hereof at the rate of    [&nbsp;&nbsp;&nbsp; ] percent per annum or such other    rate as the lender may fix from time to time, payable with</p>
<p> monthly/ quarterly    rests, for value received.</p>
<table width="75%" border="1">
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <col width="314" />
      <tr height="18">
        <td rowspan="4" height="72" width="314" align="left" valign="top"><img src="DPN_clip_image002.png" alt="qwer" width="31" height="25" />
            <table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="72" width="314">Signature</td>
              </tr>
          </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <col width="314" />
      <tr height="18">
        <td rowspan="4" height="72" width="336" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="72" width="314"><div align="right"><img src="DPN_clip_image004.png" alt="rtyui" width="30" height="26" align="left" /> <img src="DPN_clip_image003.png" alt="erty" width="59" height="61" align="absmiddle" />  Cross Signature</div></td>
              </tr>
          </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="314"><?php echo $row["Name_of_Borrower"] ?></td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="314">Affix Re    1 Revenue Stamp with Cross Signature</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <col width="314" />
      <tr height="18">
        <td rowspan="4" height="72" width="314" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="72" width="314"><div align="center"><img src="DPN_clip_image002_0000.png" alt="sdfrew" width="15" height="18" align="left" />Signature</div></td>
              </tr>
          </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <col width="314" />
      <tr height="18">
        <td rowspan="4" height="72" width="336" align="left" valign="top"><table cellpadding="0" cellspacing="0">
            <tr>
              <td rowspan="4" height="72" width="314"><div align="right"><img src="DPN_clip_image002_0000.png" alt="sdfrew" width="15" height="18" align="left" /><img src="DPN_clip_image003.png" alt="erty" width="59" height="61" align="absmiddle" /> Cross Signature</div></td>
            </tr>
        </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="314"><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="314">Affix Re    1 Revenue Stamp with Cross Signature</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellpadding="0" cellspacing="0">
      <tr>
        <td rowspan="4" height="72" width="314"><div align="center"><img src="DPN_clip_image002_0000.png" alt="sdfrew" width="15" height="18" align="left" />Signature</div></td>
      </tr>
    </table></td>
    <td><table cellpadding="0" cellspacing="0">
      <tr>
        <td rowspan="4" height="72" width="314"><div align="right"><img src="DPN_clip_image002_0000.png" alt="sdfrew" width="15" height="18" align="left" /><img src="DPN_clip_image003.png" alt="erty" width="59" height="61" align="absmiddle" /> Cross Signature</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="314">Affix Re    1 Revenue Stamp with Cross Signature</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellpadding="0" cellspacing="0">
        <tr>
          <td rowspan="4" height="72" width="314"><div align="center"><img src="DPN_clip_image002_0000.png" alt="sdfrew" width="15" height="18" align="left" />Signature</div></td>
        </tr>
    </table></td>
    <td><table cellpadding="0" cellspacing="0">
        <tr>
          <td rowspan="4" height="72" width="314"><div align="right"><img src="DPN_clip_image002_0000.png" alt="sdfrew" width="15" height="18" align="left" /><img src="DPN_clip_image003.png" alt="erty" width="59" height="61" align="absmiddle" /> Cross Signature</div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="314">Affix Re    1 Revenue Stamp with Cross Signature</td>
        </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="50%" border="1">
  <tr>
    <td><?php echo $row["Date_Place"] ?></td>
  </tr>
</table>
<P style="page-break-before: always">
<font size="1.7" face='Arial'>


<!-- Arbitration.php-->
<table width="84%" border="1">
  <tr>
    <td><div align="center"><strong>AGREEMENT    OF ARBITRATION</strong></div></td>
  </tr>
</table>
<table width="84%" border="1">
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="264">This    agreement is made on&nbsp;</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>between MENTOR FINMART PVT LTD carrying on    business amongst other places at A-156, VIDHUY NAGAR, AJMER ROAD,     Jaipur-302004 (Rajasthan) (hereinafter called owners which expression shall    include their successors and assigns where the context so admits) of the    first part</p>
<p align="center">AND</p>
<table width="86%" border="1">
  <tr>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
  </tr>
</table>
<p>(hereinafter called the Borrower which expression shall be    deemed to include his/their heirs, executors, administrators and assigns,    where the context so admits)of the second part</p>
<p align="center">AND</p>
<table width="86%" border="1">
  <tr>
    <td><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
  </tr>
  <tr>
    <td height="22"><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
  </tr>
</table>
<p>(hereinafter called the Co-Borrower which expression shall be    deemed to include his/their heirs, executors, administrators and assigns,    where the context so admits)of the third part<strong>WHEREAS</strong> the    parties above mentioned have executed a Loan agreement today with regard to    the Property as discribed here under</p>
<table width="86%" border="1">
  <tr>
    <td><?php echo $row["Residential_Address"] ?></td>
  </tr>
</table>
<p>THIS AGREEMENT WITHNESSETH that the parties hereby agree that notwithstanding anything    contained in the said agreement of Loan executed by the parties today, all    matters, questions disputed differences and / or claims between the parties    arising out of and / or concerning and / or in connection with and / or in    consequence of or relating to the said loan agreement or as the construction    thereof any of the terms or condition thereof or the Property being the    subject matter of the Loan agreement&nbsp;    or as to the compensation or damages done to the Property or the loans    or other benefits raised or obtained by the compensation or damages done to    the Property or the loans or other benefits raised or obtained by the    borrower&nbsp; and / or guaranator or    regarding the said Property whether or not the obligation of any one or more    of the parties under the said Property whether or not the obligations of any    one more of the parties under the said loan agreement be subsisting at the    time of such disputes and whether or not the said loan agreement has been    terminated or purposed to be terminated or completed shall be referred to    Sole ARBITRATION of Any retired Judicial Officer Nominated By MENTOR HOME    LOANS INDIA LIMITED (Formerly Mentor India Limited) under the provisions of    Arbitration and Conciliation Act, 1996 or any statutory modification or    re-enactment thereof. The Arbitrator shall competent shall be competent to    decide the liability of the parties for the costs of Arbitration and shall    have the power of summary procedure.</p>
<p>In Witness whereof the parties hereto have set hands on the day,    months and year above mentioned and bind themselves and their heirs and    successors and administrators and assigns.</p>
<p>Such    reference to arbitration shall not affect the right of<strong> MENTOR FINMART PVT LTD</strong>.</p>
<table width="84%" border="1">
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="264">Witness    1</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Witness    2</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="264">Name:</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Name:</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="264">Address:    Line 1</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Address:    Line 1</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="25"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="264">Line 2</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Line 2</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="84%" border="1">
  <tr>
    <td><table cellpadding="0" cellspacing="0">
      <tr>
        <td rowspan="4" height="72" width="365"><img src="Mortage_clip_image003_0002.png" alt="qq" width="31" height="25" align="bottom" /><img src="Mortage_clip_image004_0002.png" alt="ww" width="15" height="18" align="right" /></td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <col width="365" />
      <tr height="18">
        <td rowspan="4" height="72" width="365" align="left" valign="top"><table cellpadding="0" cellspacing="0">
          <tr>
            <td rowspan="4" height="72" width="365"><img src="Mortage_clip_image003_0002.png" alt="qq" width="31" height="25" align="bottom" /><img src="Mortage_clip_image004_0002.png" alt="ww" width="15" height="18" align="right" /></td>
          </tr>
        </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">Authorized    Signatory</div></td>
    <td><div align="center">Signature    of Borrower &amp; Co-Borrower(s)</div></td>
  </tr>
  <tr>
    <td>For MENTOR FINMART PVT LTD </td>
    <td><?php echo $row["Date_Place"] ?></td>
  </tr>
</table>
<P style="page-break-before: always">
<font size="1.7" face='Arial'>
<!-- POA.php-->
<table width="77%" border="1">
  <tr>
    <td colspan="3"><div align="center"><strong>POWER    OF ATTORNEY</strong></div></td>
  </tr>
</table>
<table width="77%" border="1">
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">TO ALL    TO WHOM THESE PRESENTS MAY COME&nbsp; I,</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">(NAME OF BORROWEr)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="32">R/O(RESIDENTiAL ADDRESS))</td>
      </tr>
    </table></td>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320"><?php echo $row["Name_of_Borrower"] ?></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<p>aged about [&nbsp;&nbsp;&nbsp; ] years    (here in after reffered to as &ldquo;EXECUTANT&rdquo; which expression shall unless it be repugnant to the context    or meaning thereof mean and included his/her executors, administrators, heirs    and reffered to as (&ldquo;EXECUTANT&rdquo;)</p>
<table width="77%" border="1">
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="320">WHEREAS</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="320">By and    under a Loan Agreement dated-at:</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="365"><?php echo $row["Name_of_Borrower"] ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>1- the Borrower has agreed&nbsp;    to&nbsp; borrow a loan (&ldquo;the loan&rdquo;) from Mentor India    Limited a company incorporated under provision of the Companies Act, 1956    having its registered office at Mentor House, Govind Marg, Sethi Colony,&nbsp; Jaipur&nbsp;&nbsp;    (herein after called the &ldquo;COMPANY&rdquo; or &ldquo;the Attorney&rdquo;, which expression shall, unless it be repugnant&nbsp; to the context or meaning thereof, include    its successor and assigns), and the company has agreed to sanction the loan    to the Borrower, in the amount and on the terms and conditions contained in    the Loan Agreement.</p>
<p>2- As a condition of the Loan&nbsp;    agreement,&nbsp; and in&nbsp; consideration&nbsp; of the&nbsp;    Company advancing and/or agreeing to advance the Loan to the Borrower,    the Borrower is required to execute this power of attorney in favour of the    company in respect of the borrower&rsquo;s&nbsp;    immovable&nbsp; property described in    the schedule here under written (&ldquo;the property&rdquo;) which the borrower hereby does;</p>
<p><strong>NOW KNOW ALL AND THESE PRESENTS WITNESS</strong> that the Borrower does hereby irrevocably nominate, constitute    and appoint the Company as the Borrowers true and lawful attorney (herein    after referred to as &ldquo;<strong>THE ATTORNEY</strong>&rdquo;) for the Borrower and on the Borrowers behalf and in the    Borrowers name to do, perform and execute all or any of the following acts,    deeds,&nbsp; matters&nbsp; and&nbsp;    things&nbsp; and to exercise all or    any of the powers and authorities hereby con-ferred at the risk and cost of    the Borrower, that is to say:-</p>
<p>a- To mortgage the property in favour of the company at such time    and in such manner as the attorney may think fit (including without    limitation, by way of english mortgage with power to sell without the    intervention of the court) in order to secure the repayment/ payment by the    borrower to the company of the loan, interest thereon, equated monthly    installments (EMIs) and other amounts whatsoever as may from time to time by    payable by borrower to the company under the loan agreement and/or any other    document executed by the Borrower in connection therewith and/or in relation    to the loan (hereinafter collectively reffered to as &ldquo;the Borrower&rsquo;s Due&rdquo;)</p>
<p>b- To draft, finalise, sign, seal, execute, deliver, complete    perfect and record a mortgage deed between the borrower as the mortgagor of    the one part and the Company as the mortgagee of the other part for mortage    of the property in favour of the Company in such form and manner and    containing such covenants, terms and conditions as the attorney may in its    discretion deem fit in order to secure the payment of the borrower&rsquo;s due.</p>
<p>c- To negotiate for sale of the property or any part thereof,    determine and finalise the sale consideration and other terms and conditions    of the sale with the intending purchaser (s) and to conclude and execute the    agreement for sale and the sale deed/ conveyance and other documents or    assurances in such form and on such terms&nbsp;    as the attorney may think fit and receive the consideration from the    purchaser(s) and give receipts and discharge for the same in respect of the    sale of the property and to sign agreements, appear before registrar and    sign, execute and admit the execution of the same and do all acts, deeds,    matters and things in connection therewith and in relation thereto.</p>
<p>d- To do such other acts and execute such other documents as the    Attorney may think fit for the purpose of creating or perfecting the above    mentioned mortgage and / or sale including paying stamp duty, presenting any    document for registration, registering any document, obtaining any consents,    permissions, approvals or no-objections or otherwise.</p>
<p>e- To appoint advocates, brokers and agents in connection with the    sale of the property and pay their fees and charges and appropriate the same    from the consideration amount.</p>
<p>f- To apply and obtain permission, if required, from the competent    authorities appointed under the Urban Land (Ceiling and regulation act, 1976    or from any other office or authority and to make application for that    purpose and appear before the officer concerned if necessary in connection    with obtaining sanction for the sale of the said property.</p>
<p>g- To appear before the sub registrar of Assurance or any other    competent authority and lodge any agreement, conveyance deed or any writings    or assurances for registration and to admit execution of the same as and    where necessary.</p>
<p>h- To appear before any relevant authority including but not    limited to any Musif, Collector, Mamlatdar, Municipal Corporation, Builder,    Developer, Talati office bearer of the Co-operative Housing Society or other    authority, officer or person for obtaining any consent or approval or for    such other purpose as the Attorney may think fit, to appear and make    submissions and submit any documents or correspondence on the Borrower&rsquo;s    behalf.</p>
<p>i- To appear before, apply to, receive and acknowledge notices,    letters, refund of any deposit(s) from the government, semi government    authorities for the purpose of transfer of water meter, electricity meter in    the name of purchaser(s) and to sign such forms and writings for these    purposes as may be necessary.</p>
<p>j- To    hand over the possession of the said property to the purchaser(s) or his/ her    / their agent.</p>
<p>k- To appropriate the sale consideration in respect of the said    property against the borrower&rsquo;s due and all costs, charges and expenses    incurred by the attorney in connection with the mortgage and/ or sale.</p>
<p>l- To sign such transfer forms, affidavits, declarations,    indemnities, forms and other documents and writing whatsoever as trhe    Attorney may deem fit for all or any of the aforesaid purposes.</p>
<table width="77%" border="1">
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2"><table cellspacing="0" cellpadding="0">
      <col width="365" />
      <tr height="18">
        <td rowspan="4" height="72" width="365" align="left" valign="top"><table cellpadding="0" cellspacing="0">
          <tr>
            <td rowspan="4" height="72" width="365"><img src="2-POA_clip_image003_0000.png" alt="weeeee" width="29" height="30" /><img src="2-POA_clip_image004_0000.png" alt="www" width="15" height="19" align="right" /></td>
          </tr>
        </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr> </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">Authorized    Signatory</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Signature    of Borrower &amp; Co-Borrower(s)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="320" align="left" valign="top"><table cellpadding="0" cellspacing="0">
          <tr>
            <td height="20" width="320">For MENTOR FINMART PVT LTD </td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="365"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<P style="page-break-before: always">
<p>AND GENERALLY to execute, do and perform all such deeds,    instruments, acts, matters and things in relation to these presents as the    said Attorney shall think necessary or expedient as fully and effectually in    all respects as the Borrower could have done if personally present, and the    Borrowers doth hereby confirm all and whatsoever the said Attorney shall do    or purport to do or cause to be done by virtue of these presents.</p>
<p>THE Company being incorporated body may exercise all or any of    the powers, authorities and discretions conferred hereby upon the company    through any person or persons authorised by the company and may further    delegate all or any of the same to such officiers or other persons and on    such terms and conditions as the said company or any constituted attorney or    any other person appointed by it with power to delegate may deem fit and    accordingly all deeds and documents executed and acts performed by any of the    above shall be binding on the Borrower.</p>
<p>AND the Borrower doth declare that his power of attorney shall    be irrevocable and coupled with interest so long as the Borrower&rsquo;s Dues have    not been paid by the Borrower to the Company in full AND any certificate of    the Company in this behalf shall be valid, binding and conclusive on the    Borrower and any third party who may rely upon the same.</p>
<p><strong>IN Witness Whereof</strong> the executant has    hereunto set and subscribed his hand on-at:</p>
<p>22/05/2019</p>
<table width="77%" border="1">
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">Signed,    Sealed &amp; Delivered By:</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365"><?php echo $row["Name_of_Borrower"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="32">R/O</td>
      </tr>
    </table></td>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320"><?php echo $row["Residential_Address"] ?></td>
      </tr>
    </table>      </td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="77%" border="1">
  <tr>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="18" width="685"><div align="center"><strong>DESCRIPTION    OF IMMOVABLE PROPERTY(S)</strong></div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">Property    Owner</td>
        </tr>
    </table></td>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">Property    Address</td>
        </tr>
    </table></td>
    <td><?php echo $row["Property_Address"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">Type of    Security</td>
        </tr>
    </table></td>
    <td><?php echo $row["Type_of_Property"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">Amount    of Limits</td>
        </tr>
    </table></td>
    <td><?php echo $row["Sanctioned_Amount_numbers"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="19" width="320"><strong>Type of    Paper</strong></td>
        </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365"><strong>Number    of Pages</strong></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php echo $row["U1"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">5</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php echo $row["U2"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">1</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php echo $row["U3"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">5</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php echo $row["U4"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">8</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php echo $row["U5"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">7</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320"><strong>Total    number of Pages</strong></td>
        </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">26</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>Notary Public </p>
<table width="77%" border="1">
  <tr>
    <td>&nbsp;</td>
    <td><table cellpadding="0" cellspacing="0">
      <tr>
        <td rowspan="4" height="72" width="365"><img src="2-POA_clip_image003_0000.png" alt="weeeee" width="29" height="30" /><img src="2-POA_clip_image004_0000.png" alt="www" width="15" height="19" align="right" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2"><table cellspacing="0" cellpadding="0">
      <col width="365" />
      <tr height="18">
        <td rowspan="4" height="72" width="365" align="left" valign="top"><table cellpadding="0" cellspacing="0">
          <tr>
            <td rowspan="4" height="72" width="365"><img src="2-POA_clip_image003_0000.png" alt="weeeee" width="29" height="30" /><img src="2-POA_clip_image004_0000.png" alt="www" width="15" height="19" align="right" /></td>
          </tr>
        </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr> </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">Authorized    Signatory</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">Signature    of Borrower &amp; Co-Borrower(s)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="320" align="left" valign="top"><table cellpadding="0" cellspacing="0">
          <tr>
            <td height="20" width="320">For MENTOR FINMART PVT LTD </td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="365"><?php echo $row["Name_of_Borrower"] ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<P style="page-break-before: always">
<font size="1.7" face='Arial'>
<!-- Mortage.php-->
<p align="center"><strong>MORTAGE LETTER </strong></p>
<table width="89%" border="1">
  <tr>
    <td width="31%"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
    <td width="69%">&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Name of    Borrower</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Name of    Co-Borrower(1)</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Name of    Co-Borrower(2)</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Name of    Co-Borrower(3)</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Residential    Address</td>
      </tr>
    </table></td>
    <td><?php echo $row["Residential_Address"] ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="89%" border="1">
  <tr>
    <td width="31%"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Dear    Sir/Madam,&nbsp;</td>
      </tr>
    </table></td>
    <td width="69%"><?php echo $row["Name_of_Borrower"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">I/We</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row["Date_Place"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">called    on you in your office on-at:</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="18" width="376">12-05-2019</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>and as agreed with your company, submit the original title deeds    specified here under concerning the property belonging to me/us free from    encumbrances with intent to create security by way of equitable mortgage in    respect of land/property, more fully described here under together with    buildings, super structure ,plant and machinery, constructed or to be    constructed , installed and/or to be installed and all accretions thereto to    secure the repayment of all liabilities/ advances already made or which may    hereafter by made by the Company.</p>
<table width="89%" border="1">
  <tr>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" height="18" width="629"><div align="center">Details    of Property(s):</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="40%">Property    Owner</td>
    <td width="60%"><?php echo $row["Name_of_Borrower"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Property    Address</td>
      </tr>
    </table></td>
    <td><?php echo $row["Residential_Address"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Type of    Security</td>
      </tr>
    </table></td>
    <td><?php echo $row["Type_of_Property"] ?></td>
  </tr>
  <tr>
    <td height="25"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Amount    of Limits</td>
      </tr>
    </table></td>
    <td><?php echo $row["Sanctioned_Amount_numbers"] ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="89%" border="1">
  <tr>
    <td colspan="2" height="18"><div align="center">Type    of Paper</div></td>
    <td width="37%">No of Page</td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $row["U1"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="63">5</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $row["U2"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="63">1</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $row["U3"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="63">5</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $row["U4"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="63">8</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $row["U5"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="63">7</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" height="25">Total    number of Pages</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="63">26</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>I/We agree to execute in your favour-registered mortgage at    my/our cost in form acceptable to you whenever called upon to do so. I/We further declare that the documents deposited with the    Company are the only documents that are in our possession and custody.</p>
<p>Please    acknowledge receipt.&nbsp;</p>
<table width="90%" border="1">
  <tr>
    <td height="62"><table cellspacing="0" cellpadding="0">
      <col width="253" />
      <tr height="18">
        <td rowspan="3" height="54" width="253"><div align="center">signature</div></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <col width="313" />
      <col width="63" />
      <tr height="18">
        <td colspan="2" rowspan="3" height="54" width="376" align="left" valign="top"><table cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" rowspan="3" height="54" width="376"><div align="center">signature<img src="Mortage_clip_image003_0003.png" alt="qwer" width="30" height="26" align="left" /><img src="Mortage_clip_image004_0003.png" alt="asdf" width="30" height="15" align="right" /></div></td>
          </tr>
        </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">Signature    of Mortgagor</div></td>
    <td><div align="center">Signature    of Borrower &amp; Co-Borrower(s)</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="24"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<P style="page-break-before: always">
<font size="1.7" face='Arial'>
<!-- Declaration.php-->
<table width="88%" border="1">
  <tr>
    <td colspan="3"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" height="18" width="697"><div align="center">DECLARATION</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="39">I/We</td>
      </tr>
    </table></td>
    <td colspan="2"> <?php echo $row["Name_of_Borrower"] ?> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="39">R/O</td>
      </tr>
    </table></td>
    <td colspan="2"><?php echo $row["Residential_Address"] ?></td>
  </tr>
</table>
<p>aged    about [&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ] years do hereby    solemnly declare and state as under:</p>
<p>1- I    / we say that I am / we are competent to make this Declaration.</p>
<p>2- /we declare that I /we am/are or the Borrower is absolutely    seized and possessed of and otherwise well and sufficiently entitled to the    immovable property described in the First Schedule hereunder written (herein    after called the &rdquo;Property&rdquo;).</p>
<p>3-I /we say that Mentor Home Loans India Limited ( herein after    called the &ldquo;Lender&rdquo;) has, at    the Borrower&rsquo;s request, sanctioned/ agreed to sanction to the Borrower a Loan    in the principal sum and on the terms and conditions stated / contained in    the loan Agreement executed between the Borrower and the Lender.</p>
<p>4-I /we or the Borrower declare that in consideration of the said    Loan sanctioned/ agreed to be sanctioned by the Lender to the Borrower, I /we    or the Borrower have agreed to create security in favour of the Lender by    creating an equitable mortgage, by deposit of title deeds, over the Property    to secure the due repayment to the Lender of the said Loan, interest, fee,    commitment charges, costs, charges and expenses and all other amounts payable    by me/ us or the Borrower to the Lender.</p>
<p>5-I /we or the Borrower say that I /we am/are the absolute owner/s    or lessees/s of the Property intended to be mortgaged in favour of the    Lender.</p>
<p>6-I /we or the Borrower say that apart from the documents of title    mentioned in the Second Schedule hereunder written (herein after called the    &ldquo;said title deeds&rdquo;) there are no other title documents pertaining to the    Property.</p>
<p>7- /we or the Borrower state that the original Agreement for    Sale/ Indenture of Conveyance/ Indenture of Lease in respect of the Property    has been lodged for registration with the Sub-Registrar for Assurances. I/we    or the Borrower undertake to deliver and deposit the said original document    with the Lender in case the same is received by me/us or the Borrower and I    /we declare that on such delivery and deposit the said document will form    part of the said title deeds to be deposited with the Lender.</p>
<p>8-I /we or the Borrower state that a society of the purchasers of    flats in the building where the Property is situated has not been formed till    date. I/we undertake to deliver and deposit with the Lender the share    certificate relating to the shares to be issued to me/us or the Borrower by    the said society as and when the said shares are issued and I /we declare    that on such delivery and deposit the said share certificates will form part    of the said title deeds to be deposited with the Lender.</p>
<p>9-I /we or the Borrower say that I /we or the Borrower have    obtained the permission of the society/association/company/owner/builder for    mortgaging the Property in favour of the Lender.</p>
<p>10-I /we or the borrower say that I /we or the Borrower have    obtained the permission of the Competent Authority under the provisions of    the Urban Land (Ceiling and Regulation) act, 1976 for mortgaging the Property    in favour of the Lender.</p>
<p>OR</p>
<p>I /we or the Borrower say that no permission is required to be    obtained under the provisions of the Urban Land (Ceiling and Regulation) act,    1976 for mortgaging the Property in favour of the Lender.</p>
<p>11-I /we or the Borrower say that I /we or the Borrower have    acquired the Property with my /our self acquired funds and I /we or the    Borrower am/are/is the sole and absolute owners/lessees thereof and no other    person has any share, right, title or interest of any kind or nature    whatsoever in the Property.</p>
<p>12-I /we or the Borrower say that I /we or the Borrower have/has a    clear and marketable title to the Property free from encumbrances and    reasonable doubts and/or/ I /we or the Borrower am/are/is in exclusive    undisturbed possession and occupation of the Property.</p>
<p>13-I /we or the Borrower say that no material change has taken    place, which would affect the construction/ purchase of the Property.</p>
<p>14-I w/e or the Borrower say that the Property is free from any    mortgage, charges, liens, demands or claims whatsoever and is not the subject    matter of any lis pendens, attachment or any other process issued in any    court or authority and no litigation, suit, writ, action, investigation or    arbitration proceedings or other proceedings are / have been initiated or are    pending against me/ us or the Borrower in respect of the Property or any part    thereof. I /we or the Borrower say that there is no writ, action, suit or    proceeding decided or disposed off or any judgment or order of any court or    authority, which has or is likely to have a material adverse effect on me/ us    or the Borrower&rsquo;s business, properties or assets.</p>
<p>15-I /we or the Borrower state that the Property has been given on    leaves and license/ lease/ for occupation to _______________________ (name of    occupant) the same are in use and occupation of the said licensee/ lessee/    occupier. I/ we agree and undertake on behalf of the company that on expiry    or termination off the lease/ license/ occupancy term the possession of the    Property will be handed over to the Lender. I /we or theBorrower have/has    given irrevocable instructions and authority to the lessee/ licensee/    occupier to hand over possession of the Property to the Lender on expiry of    the term of the lease/ license/ occupancy.</p>
<p>OR</p>
<p>Upon the lender giving to me/ us/ the Borrower a written notice    to enforce the said security. I /we/ the Borrower shall forthwith have the    Property vacated and hand over vacant possession thereof to the Lender.</p>
<p>OR</p>
<p>I /we or the Borrower state that the Property is in the    occupation of&nbsp; ______________ and I /we    or the Borrower have given irrevocable instructions and authority to    ___________________________ to vacate and hand over possession of the    Property to the Lender immediately on Lender&rsquo;s request. And the Lender will    have complete liberty to take possession of the Property.</p>
<p>16-I /we or the Borrower have/ has furnished / will furnish all the    documents of title in my/ our or the Borrower&rsquo;s possession to the lender and    the same may be retained or dealt with in such manner as may be in accordance    with the Agreement and other documents executed/ to be executed by me/ us or    the Borrower.</p>
<p>17-I /we or the Borrower hereby agree, confirm and undertake that    in case I /we or the Borrower default in making repayment of the loan    installments or other amounts due from me/ us or the Borrower, in terms of    the Agreement with the Lender, the Lender will have complete liberty to sell,    alienate or encumber the Property in any manner whatsoever the Lender deem    fit and I /we or the Borrower will hand over the vacant possession of the    Property without any demur or protest the Lender and the same may be retained    or dealt with in such manner as may be in accordance with the Agreement and    other documents executed / to be executed by me/ us or the Borrower.</p>
<p>&nbsp;</p>
<table width="88%" border="1">
  <tr>
    <td rowspan="4"><table cellspacing="0" cellpadding="0">
      <col width="257" />
      <tr height="16">
        <td rowspan="4" height="65" width="257" align="left" valign="top"><table cellpadding="0" cellspacing="0">
          <tr>
            <td rowspan="4" height="65" width="257"><img src="Declaration_clip_image002_0000.png" alt="asd" width="30" height="26" /></td>
          </tr>
        </table></td>
      </tr>
      <tr height="16"> </tr>
      <tr height="16"> </tr>
      <tr height="17"> </tr>
    </table></td>
    <td rowspan="4">&nbsp;</td>
  </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="257">Signature    of Borrower</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="401">Signature    of Co-Borrower(s)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="257"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>18-I /we or the Borrower say that as on date I /we or the Borrower    have/has in my/ our or the Borrower&rsquo;s possession, power and control only    those documents, evidences and writings relating to the Property all or which    are more particularly described in the Second Schedule hereunder written/    hereto attached being the title deeds in respect of the Property. I /we or    the Borrower hereby unconditionally agree, confirm and undertake that if at    any time hereafter any further title deeds relating to the Property come into    my/ our or the Borrower&rsquo;s possession, power or control, I /we or the Borrower    shall hand over the same to the Lender to perfect the security by way or    equitable mortgage proposed to be created by me/us or the Borrower over and    in respect of the Property in favour of the Lender.</p>
<p>19-I /we or the Borrower have/ has scrutinized and am/are/is    satisfied with the building plans, commencement certificate and all the    requisite permissions pertaining to the Property and that the construction is    as per the approved plans and of a satisfactory and standard quality.</p>
<p>20-I /we or the Borrower undertake that the I /we or the Borrower    shall not seek or attempt to further mortgage or charge or seek or attempt or    sell, lease, sub-lease give on leave and license, let out, transfer dispose    off or create any third party rights in or over the Property or any part    thereof or otherwise deal with the Property in a manner prejudicial to the    interests of the Lender and I /we or the Borrower hereby confirm and    undertake that I /we or the Borrower shall and will at all times and as and    when required make out a clear and marketable title to the Property to the    satisfaction of the Lender and/ or its legal counsel, free from all    reasonable doubts, claims and encumbrances, I /we or the Borrower declare and    confirm that I /we or the Borrower have/has not entered into any agreement    for sale or otherwise with any person or party in respect of the Property.</p>
<p>21-I /we or the Borrower declare that there is no impediment of    hindrance in law or otherwise preventing me/ us or the Borrower creating a    mortgage in favour of the Lender over the Property as security as aforesaid.    I /we or the borrower declare that I /we or the Borrower am/are/is not aware    of any document /judgment or legal process or latent/ patent defect in    my/our/the Borrower&rsquo;s title to the Property, which may prejudicially affect    the interest of the Lender.</p>
<p>22-I /we or the Borrower say that no notice of acquisition or    requisition has been issued against or published or received in respect of    the Property and no adverse claim has been made against the Property or any    part thereof nor is the Property reserved for any purpose.</p>
<p>23-I    /we or the Borrower say that the Property is not subject to any trust,    inheritance or gift or other right whatsoever.</p>
<p>24-I /we or the Borrower declare that I /we or the Borrower    has/have observed and performed and will duly observe and perform all the    rules, regulations and bye laws of the society/ the association/ company/    other body in respect of the holding and occupation of the property and the    terms and conditions on which the Property has been acquired and I /we or the    Borrower will not do or omit to do anything whereby the security in favour of    the Lender may be prejudicially affected in any manner whatsoever.</p>
<p>25-I /we or the Borrower say that I /we or the Borrower has/have    duly paid and will duly pay all rates, rents, taxes, cesses, assessments,    revenues, duties, society charges and all other demands and outgoings now or    hereafter&nbsp; due in respect of the    Property and that at present there are no arrears of such rates, rents,    taxes,cesses, assessments, revenues, duties, charges, demands, and outgoing    and that no attachments or warrants have been served on me/us in respect of any    Sales Tax, Income Tax, Government revenues or other taxes.</p>
<p>26-I /we or the Borrower shall abide by all the terms and    conditions of the Agreement and other documents executed by me / us, in so    far as the terms and conditions are applicable to me/us as owner/lessee of    the Property.</p>
<p>27-I /we or the Borrower confirm that the Property is duly insured    and undertake that I /we or the Borrower shall duly pay all insurance premia    in respect of thereof.</p>
<p>28-I /we or the Borrower hereby agree to indemnify and keep the    Lender indemnified from any loss, damage, claim, action, costs, charges and    expenses which the Lender may suffer or incur as a result of any defect in    my/ our title to the Property or any misrepresentation made by me/ us/ the    Borrower.</p>
<p>AND I /we or the Borrower declare that I /we or the Borrower am/    are/ is making the aforesaid declaration solemnly and sincerely believing the    same to be true and knowing fully well that based on the statements and    declarations and the indemnity aforesaid the Lender has sanctioned/ agreed to    sanction the said Loan to me/ us/ the Borrower.</p>
<table width="88%" border="1">
  <tr>
    <td rowspan="5">&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="257">Solemnly    affirmed on-at:</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="401"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="257">By the    within named:</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="401"><?php echo $row["Name_of_Borrower"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="401"><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
  </tr>
  <tr>
    <td>R/O</td>
    <td colspan="2"><?php echo $row["Residential_Address"] ?></td>
  </tr>
  
  
  <tr>
    <td rowspan="5">&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="257">Notary    Public</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <col width="257" />
      <tr height="16">
        <td rowspan="4" height="64" width="257" align="left" valign="top"><table cellpadding="0" cellspacing="0">
          <tr>
            <td rowspan="4" height="64" width="257"><div align="center"><img src="Declaration_clip_image002_0001.png" alt="aqsz" width="29" height="28" align="left" />signature</div></td>
          </tr>
        </table></td>
      </tr>
      <tr height="16"> </tr>
      <tr height="16"> </tr>
      <tr height="16"> </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <col width="401" />
      <tr height="16">
        <td rowspan="4" height="64" width="401" align="left" valign="top"><table cellpadding="0" cellspacing="0">
          <tr>
            <td rowspan="4" height="64" width="401"><div align="center"><img src="Declaration_clip_image002_0002.png" alt="asop" width="15" height="18" align="left" />signature</div></td>
          </tr>
        </table></td>
      </tr>
      <tr height="16"> </tr>
      <tr height="16"> </tr>
      <tr height="16"> </tr>
    </table></td>
  </tr>
  
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="257">Signature    of Borrower</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="401">Signature    of Co-Borrower(s)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="257"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<P style="page-break-before: always">
<font size="1.7" face='Arial'>
<!-- Final.php-->
<table width="88%" border="1">
  <tr>
    <td width="45%"><table cellspacing="0" cellpadding="0">
      <col width="32" />
      <col width="277" />
      <tr height="17">
        <td colspan="2" rowspan="2" height="34" width="309"><strong>Most    Important Terms and Conditions</strong></td>
      </tr>
      <tr height="17"> </tr>
    </table></td>
    <td width="55%"><strong>MENTOR FINMART PVT LTD </strong></td>
  </tr>
  <tr>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" height="17" width="710"><div align="center">Agreement    Between <?php echo $row["Name_of_Borrower"] ?> and Mentor Finmart Private Limited are as follows:</div></td>
        </tr>
    </table></td>
  </tr>
  
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="20" width="309">Loan    Sanctioned &amp; EMI Amount &amp; Tenure</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td width="401"><?php echo $row["Sanctioned_Amount_numbers"] ?></td>
        <td width="401"><?php echo $row["Monthly_installment"] ?></td>
        <td height="20" width="401"><?php echo $row["Tenure_in_months"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="20" width="309"><strong>IRR</strong></td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="401"><?php echo $row["IRR"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277"><table cellspacing="0" cellpadding="0">
            <tr>
              <td height="18" width="257">Type</td>
              </tr>
            </table></td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">0%</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Moratorium</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">NIL</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Date of    rest (Date of first EMI)</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401"><?php echo $row["EMI_Starts_From"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Mode of    communicaton</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">SMS /    Voice Massege / Telephonic</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="20" width="309"><strong>Installment    Type</strong></td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="401">Monthly</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="20" width="309"><strong>Purpose    of loan</strong></td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="20" width="401"><?php echo $row["Purpose_of_Loan"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="20" width="309"><strong>Fee    &amp; other Charges</strong></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277"> On    Application</td>
          </tr>
      </table>
    </div></td>
    <td>Rs. - 550 / Rs. - 1100 </td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Fee    refundable if not sanctioned</td>
          </tr>
      </table>
    </div></td>
    <td>NIL</td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Switch    from floating to fixed</td>
          </tr>
      </table>
    </div></td>
    <td>N/A</td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Default    Interest rate</td>
          </tr>
      </table>
    </div></td>
    <td>60%</td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Default/    Cheque Return/ ECS debit</td>
          </tr>
      </table>
    </div></td>
    <td>Rs. 1000/- </td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Repayment    EMI Frequency</td>
          </tr>
      </table>
    </div></td>
    <td>EVERY MONTH </td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Pre-Payment    Charges</td>
          </tr>
      </table>
    </div></td>
    <td>3-5%</td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Cheque    Swap Charges</td>
          </tr>
      </table>
    </div></td>
    <td>Rs.. 500/- </td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Statement    Charges</td>
          </tr>
      </table>
    </div></td>
    <td>Rs. 200/- </td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Papers    to be submitted before disburshment</td>
          </tr>
      </table>
    </div></td>
    <td>As per company's requirement </td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Disbursement</td>
          </tr>
      </table>
    </div></td>
    <td>One time / As per construction stage </td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="22" width="277">Foreclosure    of the account</td>
          </tr>
      </table>
    </div></td>
    <td>Foreclosure wiil not be allowed before 12 EMI has been recieved </td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="20" width="309"><strong>Security</strong></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <col width="277" />
        <tr height="18">
          <td rowspan="2" height="36" width="277">Mortgage    (Property Address)</td>
          </tr>
        <tr height="18"> </tr>
      </table>
    </div></td>
    <td><?php echo $row["Property_Address"] ?></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Guarantee    (name of person)</td>
          </tr>
      </table>
    </div></td>
    <td><?php echo $row["Name_of_Guarantor"] ?></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Other    Security</td>
          </tr>
      </table>
    </div></td>
    <td><?php echo $row["Additional_Security"] ?></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td width="309" height="20" colspan="2"><strong>Insurance</strong></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
        <table cellspacing="0" cellpadding="0">
          <tr>
            <td height="18" width="277">Repayment</td>
          </tr>
        </table>
    </div></td>
    <td>As Mentioned Above </td>
  </tr>
  <tr>
    <td><div align="center">
        <table cellspacing="0" cellpadding="0">
          <tr>
            <td height="18" width="277">Procedure for Recovery </td>
          </tr>
        </table>
    </div></td>
    <td>As per the Recovery Manual of the company or mentioned on website. </td>
  </tr>
  <tr>
    <td><div align="center">
        <table cellspacing="0" cellpadding="0">
          <tr>
            <td height="18" width="277">Annual outstanding balance </td>
          </tr>
        </table>
    </div></td>
    <td>After 15th May of preceeding year. </td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td width="309" height="20" colspan="2"><strong>Customer    Service</strong></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Visiting    Hours</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">10 AM to    5 PM</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Person    to be contacted</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">Customer    Service Desk</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Procedure</td>
          </tr>
      </table>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Loan    Statement</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">Once in    a year where there is no over dues</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Copy of    title Deeds</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">Charge    of Rs 1000/- (in 15 days)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Closure</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">After    payment of entire dues (in 21 days)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="20" width="309"><strong>Grievance    Redressal</strong></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Email</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401"><a href="mailto:grievance.cell@mentorindiagroup.com">grievance.cell@mentorindiagroup.com</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Register</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">You can    write in the complaint register in the office</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Turn    around time</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">Maximum    21 working days</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="277">Incase    of dissatisfaction</td>
          </tr>
      </table>
    </div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">Approach    RBI online at .rbi.org.in</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="18" width="678"><div align="center">Offline    mode Complaint redressal Cell, Central office Building, Shahid Bhagat marg, Mumbai- 400001 </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <col width="277" />
      <tr height="18">
        <td rowspan="4" height="72" width="277" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="72" width="277"><div align="right"><img src="MITC_clip_image002_0000.png" alt="asqz" width="29" height="29" align="left" />signature</div></td>
              </tr>
          </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <col width="401" />
      <tr height="18">
        <td rowspan="4" height="72" width="401" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="4" height="72" width="401"><div align="right"><img src="MITC_clip_image002_0001.png" alt="asuj" width="15" height="19" align="left" />signature</div></td>
              </tr>
          </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="277">Borrower</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401">Co-Borrower(s)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="277"><?php echo $row["Name_of_Borrower"] ?></td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="401"><?php echo $row["Name_of_Co_Borrower_1"] ?>,<?php echo $row["Name_of_Co_Borrower_2"] ?>,<?php echo $row["Name_of_Co_Borrower_3"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="25"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="277">22-02-2019</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>


<?php
}
}

?>








</body>
</html>

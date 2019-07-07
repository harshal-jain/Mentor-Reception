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
<table width="84%" border="1">
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="277">22-02-2019</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
}
}

?>


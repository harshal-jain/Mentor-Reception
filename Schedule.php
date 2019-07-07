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
<table width="93%" border="1">
  <tr>
    <td colspan="3"><div align="center"><strong>SCHEDULE</strong></div></td>
  </tr>
  <tr>
    <td width="11%">1</td>
    <td width="53%"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Place    &amp; Date of execution of Agreement</td>
      </tr>
    </table></td>
    <td width="36%"><?php echo $row["Date_Place"] ?></td>
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
    <td rowspan="2">6</td>
    <td rowspan="2"><table cellspacing="0" cellpadding="0">
      <col width="271" />
      <tr height="18">
        <td rowspan="2" height="36" width="271">Loan    to be availed within: [60] days</td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">6A&nbsp; Cancellation period: [30] days</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">6B    Cancellation fee**: Rs. 5000</td>
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
<p>*At    its sole discretion, the Company may charge minimum 5% + balance interest for    the first year. </p>
<p>*In the event pre-payment is requested by the Borrower for    availing a loan facility on the same property from any other bank, financial    institution or entity, the Borrower shall pay an additional pre-payment    charge of 3% of the outstanding Loan over and above the pre-payment charges    stated in the sub-clause 12 above.</p>
<table width="50%" border="1">
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
    <td colspan="2">Mentor    House, Govind Marg, Sethi Colony, Jaipur-302004 (Rajasthan)</td>
  </tr>
</table>
<p>*Service    Tax and other statutory charges as applicable would be charged extra.</p>
<table width="89%" border="1">
  <tr>
    <td rowspan="3"><table cellspacing="0" cellpadding="0">
      <col width="271" />
      <tr height="18">
        <td rowspan="4" height="72" width="271"><div align="center">signature</div></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
    <td rowspan="3"><table cellspacing="0" cellpadding="0">
      <col width="365" />
      <tr height="18">
        <td rowspan="4" height="72" width="365" align="left" valign="top"><table cellpadding="0" cellspacing="0">
          <tr>
            <td rowspan="4" height="72" width="365"><div align="center"><img src="Schedule_clip_image003_0001.png" alt="asdasdasd" width="30" height="26" align="left" />signature <img src="Schedule_clip_image004_0001.png" alt="asdaqd" width="22" height="26" align="right" /></div></td>
          </tr>
        </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
  </tr>
  <tr> </tr>
  <tr> </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="271">Authorized    Signatory</td>
      </tr>
    </table></td>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?php
}
}

?>


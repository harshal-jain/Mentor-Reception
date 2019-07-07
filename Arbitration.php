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
<p>&nbsp;</p>
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
<table width="85%" border="1">
  <tr>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
  </tr>
</table>
<p>(hereinafter called the Borrower which expression shall be    deemed to include his/their heirs, executors, administrators and assigns,    where the context so admits)</p>
<p> of the second part</p>
<p align="center">AND</p>
<table width="86%" border="1">
  <tr>
    <td><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
  </tr>
  <tr>
    <td><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
  </tr>
</table>
<p>(hereinafter called the Co-Borrower which expression shall be    deemed to include his/their heirs, executors, administrators and assigns,    where the context so admits) </p>
<p>of the third part</p>
<p><strong>WHEREAS</strong> the    parties above mentioned have executed a Loan agreement today with regard to    the Property as discribed here under</p>
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
    <td><table cellspacing="0" cellpadding="0">
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?php
}
}

?>


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
<table width="56%" border="1">
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Dear    Sir/Madam,&nbsp;</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
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
<table width="56%" border="1">
  <tr>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" height="18" width="629"><div align="center">Details    of Property(s):</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="63%"><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="38" width="253">Property    Owner</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
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
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="253">Amount    of Limits</td>
      </tr>
    </table></td>
    <td><?php echo $row["Sanctioned_Amount_numbers"] ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="56%" border="1">
  <tr>
    <td colspan="2" height="18"><div align="center">Type    of Paper</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="63">No of Page</td>
      </tr>
    </table></td>
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
    <td colspan="2" height="18">Total    number of Pages</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="63">26</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>I/We agree to execute in your favour-registered mortgage at    my/our cost in form acceptable to you whenever called upon to do so.</p>
<p>I/We further declare that the documents deposited with the    Company are the only documents that are in our possession and custody.</p>
<p>Please    acknowledge receipt.&nbsp;</p>
<table width="87%" border="1">
  <tr>
    <td height="123"><table cellspacing="0" cellpadding="0">
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
    <td><table cellspacing="0" cellpadding="0">
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
</body>
</html>
<?php
}
}

?>


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
<p>&nbsp;</p>
</body>
</html>
<?php
}
}

?>


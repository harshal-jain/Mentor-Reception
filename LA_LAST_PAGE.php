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
<table width="80%" border="1">
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td><table cellspacing="0" cellpadding="0">
      <col width="286" />
      <tr height="18">
        <td rowspan="2" height="36" width="286">Property Address</td>
      </tr>
      <tr height="18"> </tr>
    </table></td>
    <td><?php echo $row["Property_Address"] ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<p><strong>For Mentor Home Loans India Limited:</strong></p>
<table width="34%" border="1">
  <tr>
    <td>Signed and Delivered to </td>
  </tr>
  <tr>
    <td height="28">MENTOR FINMART PVT LTD </td>
  </tr>
  <tr>
    <td><p>&nbsp;</p>
      <p align="center">signature</p>
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
    <td><table cellspacing="0" cellpadding="0">
        <tr>
          <td height="18" width="286"><?php echo $row["Date_Place"] ?></td>
        </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp; </p>
</body>
</html>
<?php
}
}

?>


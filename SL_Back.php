<?php
include("connection.php");


$sql="SELECT * FROM tbl_entrypage WHERE id=".$_SESSION["id"];

$tbl=mysqli_query($con,$sql);

if($tbl)
{
	while($row=mysqli_fetch_array($tbl))
	{
		 

?>
<table width="81%" border="1">
  <tr>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="18" width="634"> <div align="right"><strong>TERMS    &amp; CONDITIONS FOR HOUSING FINANCE / &#2310;&#2357;&#2366;&#2360; &#2325;&#2375; &#2354;&#2367;&#2319; &#2344;&#2367;&#2351;&#2350; &#2319;&#2357;&#2306; &#2358;&#2352;&#2381;&#2340;&#2375;&#2306;</strong></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="49%">&nbsp;</td>
    <td width="51%">&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Visiting    Hours</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269">Repayment EMI Frequency/fdLr pqdkus    dh vko`fr&nbsp;</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">EVERY MONTH/gj efgus&nbsp;</td>
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
        <td height="37" width="269">Default/Cheque Return/ECS debit/&#2337;&#2367;&#2347;&#2364;&#2377;&#2354;&#2381;&#2335;/&#2330;&#2376;&#2325;    &#2357;&#2366;&#2346;&#2360;&#2368;/fdLr okilh</td>
      </tr>
    </table></td>
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
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="36" width="269">Papers to be submitted before disburshment / &#2325;&#2366;&#2327;&#2332; &#2309;&#2342;&#2366;&#2351;&#2327;&#2368; &#2360;&#2375; &#2346;&#2361;&#2354;&#2375; &#2346;&#2381;&#2352;&#2360;&#2381;&#2340;&#2369;&#2340; &#2325;&#2367;&#2351;&#2366;    &#2332;&#2366;&#2344;&#2366; &#2361;&#2376;</td>
      </tr>
    </table></td>
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
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="53" width="269">Foreclosure of the account/[kkrk cUn djokuk</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="53" width="365">Forecloser    will not be allowed before 12 EMI has been deposited/12&nbsp; fdLrks ls igys yksu dks [kRe ugh fd;k tk    ldrk Gsa</td>
      </tr>
    </table></td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
        <td height="18" width="269">Turn    around time&nbsp;</td>
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
    <td><table cellspacing="0" cellpadding="0">
      <col width="365" />
      <tr height="18">
        <td rowspan="5" height="90" width="365" align="left" valign="top"><table cellpadding="0" cellspacing="0">
              <tr>
                <td rowspan="5" height="90" width="365"><div align="center"><img src="SL_Back_clip_image002_0002.png" alt="qw" width="16" height="17" align="left" />signature</div></td>
              </tr>
          </table></td>
      </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
      <tr height="18"> </tr>
    </table></td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="269"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
}
}

?>

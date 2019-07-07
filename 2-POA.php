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
    <td>&nbsp;</td>
    <td colspan="2"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" height="18" width="685"><div align="center"><strong>DESCRIPTION    OF IMMOVABLE PROPERTY(S)</strong></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">Property    Owner</td>
      </tr>
    </table></td>
    <td><?php echo $row["Name_of_Borrower"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">Property    Address</td>
      </tr>
    </table></td>
    <td><?php echo $row["Property_Address"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="320">Type of    Security</td>
      </tr>
    </table></td>
    <td><?php echo $row["Type_of_Property"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td><?php echo $row["U1"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">5</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row["U2"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">1</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row["U3"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">5</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row["U4"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">8</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row["U5"] ?></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="18" width="365">7</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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


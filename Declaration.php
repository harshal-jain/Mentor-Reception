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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td><?php echo $row["Name_of_Co_Borrower_1"] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="401"><?php echo $row["Name_of_Co_Borrower_2"] ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $row["Name_of_Co_Borrower_3"] ?></td>
  </tr>
  <tr>
    <td>R/O</td>
    <td colspan="2"><?php echo $row["Residential_Address"] ?></td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="257">Notary    Public</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="3">&nbsp;</td>
    <td rowspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="4"><table cellspacing="0" cellpadding="0">
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
    <td rowspan="4"><table cellspacing="0" cellpadding="0">
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" width="257"><?php echo $row["Date_Place"] ?></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?php
}
}

?>


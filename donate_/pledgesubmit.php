<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:php="http://php.net/xsl" lang="en"><head xmlns=""><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=7"><meta name="Generator" content="Yahoo! Site Solution - galaga"><meta name="DESCRIPTION" id="mDescription" content="We Need Your Support!Renovations are underway and we need your support to see this project to completion! You can support the project with a tax deductible donation:by electronic donation - use PayPal button below by mail Kardeh-Hassan (intrest free loan)Y"><meta name="KEYWORDS" id="mKeywords" content="Religion and spirituality, Berkeley Masjid, Donate, 2716 Derby Street, Berkeley, CA, Donation"><link rel="stylesheet" type="text/css" media="screen" id="globalCSS" href="http://us.js2.yimg.com/us.js.yimg.com/lib/smb/css/hosting/yss/v2/global.1_6_6_3.css"><link rel="stylesheet" type="text/css" media="screen" id="themeCSS" href="http://us.js2.yimg.com/us.js.yimg.com/lib/smb/assets/hosting/yss/themes/crawford/ranch/css/en-us/theme_1.7.6.1.css"><link rel="stylesheet" type="text/css" media="screen" id="layoutCSS" href="http://us.js2.yimg.com/us.js.yimg.com/lib/smb/assets/hosting/yss/themes/crawford/ranch/css/en-us/layout_1_wt_1.2.css"><link rel="stylesheet" type="text/css" media="screen" id="listCSS" href="http://us.js2.yimg.com/us.js.yimg.com/lib/smb/css/hosting/yss/v2/apps/paypal_1.1.2.7.css"><link rel="stylesheet" type="text/css" media="screen" id="extensionsCSS" href="http://us.yimg.com/lib/smb/assets/hosting/yss/extensions/css/mc_yss_extensions.144201.css"><script type="text/javascript" src="http://yui.yahooapis.com/2.7.0/build/utilities/utilities.js"></script><script type="text/javascript" src="http://us.js2.yimg.com/us.js.yimg.com/lib/common/widgets/2/container/container_2.1.0.js"></script><script type="text/javascript">
            var $D  =  YAHOO.util.Dom;
            var $E  =  YAHOO.util.Event;
            var $A  =  YAHOO.util.Anim;
            var $M  =  YAHOO.util.Motion;
            var $EA =  YAHOO.util.Easing;
            var $DD =  YAHOO.util.DD;
            var $C  =  YAHOO.util.Connect;
            var $   =  $D.get;

            YAHOO.namespace ("Smb.Asteroids.Logger");
            YAHOO.Smb.Asteroids.Logger = {
                Log : function(e) {
                    if (typeof console !== 'undefined') {
                        console.log(e);
                    }
                }
            }
            var $LOG = YAHOO.Smb.Asteroids.Logger.Log;

        </script><title>Berkeley Masjid - Pledge Form</title></head><body><div id="body"><div id="doc"><div xmlns="" id="hd"><style>
		blockquote {margin-right:0;padding-right:0}
	</style>
<div id="hContent"><div id="headerContent" class="editorWrap"><div id="headerZoneElement" class="editable rte flexContent" rel="itemGuid.sit.hc.001"><h1>Berkeley Masjid</h1></div></div></div><div id="hMisc"><div class="contactInfoContainer" style="width:auto;height:auto"><p class="vcard"><span class="adr"><span class="street-address">2716 Derby Street</span><br><span class="locality">Berkeley</span><span class="separator">, </span><span class="region">CA</span> <span class="postal-code">94705</span></span></p></div></div></div><div id="wrapper"><div xmlns="" id="navigation"><ul id="mainNav"><li><a href="/home">Home</a></li> <li><a href="/about">About</a></li> <li><a href="/faq">FAQ</a></li> <li><a href="/events">Events</a></li> <li><a href="/photos">Photos</a></li> <li><a href="/construction">Construction</a></li> <li><a href="/financials">Financials</a></li> <li><a href="/documents">Documents</a></li> <li><a href="/archive">Archive</a></li> <li class="active"><a href="/donate">Donate</a></li> <li><a href="/links">Links</a></li> <li><a href="/contact">Contact</a></li> </ul></div><div xmlns="" id="bd"><div id="pageName"><div id="pageNameContent" class="editorWrap"><div id="pageNameZoneContent" class="editable rte flexContent" rel="itemGuid.pgName.pageGuid.480bea9251d8b8.19643920">



<h2>Donation Pledge Form</h2></div></div></div><div id="zWrap"><div id="zA"><div class="modWrap">

<div id="mcontainer_zA.1" class="module_container module_app_paypal"><ul id="mbdcontainer_zA.1" class="module_bd_container"><li id="module_itemRecordGuid.480beaa331b687.61878525" class="module service "><h3 id="mf_itemGuid.480beaa331b5e5.94709245" class="modfield title
                editable flexContent rte_limited_a" rel="itemGuid.480beaa331b5e5.94709245">

<div id="mf_itemGuid.480beaa331b5e5.94709246" class="modfield description editable flexContent rte" rel="itemGuid.480beaa331b5e5.94709246">

<p>
<?php
//@author: gmahmud, editor: mtalaat
function write($the_string ){
  if( $fh = @fopen( "pledges.csv", "a+" ) )
    {
      fputs( $fh, $the_string, strlen($the_string) );
      fclose( $fh );
      return( true );
    }
  else
    {
      return( false );
    }
}

function write_pledges($the_string ){
  if( $fh = @fopen( "pledges.txt", "a+" ) )
    {
      fputs( $fh, $the_string, strlen($the_string) );
      fclose( $fh );
      return( true );
    }
  else
    {
      return( false );
    }
}

function log_pledges($the_string ){
  if( $fh = @fopen( "pledges.log", "a+" ) )
    {
      fputs( $fh, $the_string, strlen($the_string) );
      fclose( $fh );
      return( true );
    }
  else
    {
      return( false );
    }
}

function log_email($the_string ){
  if( $fh = @fopen( "email.log", "a+" ) )
    {
      fputs( $fh, $the_string, strlen($the_string) );
      fclose( $fh );
      return( true );
    }
  else
    {
      return( false );
    }
}

$fullname = $_POST['fullname'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$amount = $_POST['amount'];
$installments = $_POST['installments'];
$message = $_POST['comment'];
$ccemail = "motalaat@yahoo.co.uk";
$thankyounote="Thank you for supporting the Berkeley Masjid.";
$errorcode = 0;
$to_email = 'donate@berkeleymasjid.org';
//$to_email2 = 'motalaat@yahoo.co.uk';

$from=$email;

//define the subject of the email

$subject = "Donation Pledge for Berkeley Masjid Construction : from $fullname ";
$headers = "From: $fullname <$from>\r\nReply-To: $from \r\nBcc: $ccemail";
$thistime = date("m/d/y : H:i:s", time());

//send the email

if ($errorcode==0){
  echo "<center>$thankyounote</center>";
  $mail_sent = @mail( $to_email, $subject, $message, $headers );
  //$mail_sent2 = @mail( $to_email2, $subject, $message, $headers );
  //write to CSV file and logs
   write("\"$thistime\",\"$fullname\",\"$address\",\"$phone\",\"$from\",\"$amount\",\"$installments\",\"$message\" \n");

   write_pledges("\n****************************************************************************************************\n");
   write_pledges("Timestamp: $thistime\nName: $fullname\nAddress: $address\nEmail: $from\nPhone: $phone\nPledge Amount: $amount\nNumber of Installments: $installments\nComment: $message\n");
   write_pledges("\n****************************************************************************************************\n");

  log_pledges("\"$thistime\",\"$fullname\",\"$address\",\"$phone\",\"$from\",\"$amount\",\"$installments\",\"$message\" \n");

  $mail_sent ? log_email(" $thistime : Mail sent to $to_email from $fullname <$from> \n $message \n") : log_email(" $thistime : Mail failed for $to_email from $fullname <$from>\n $message \n");

}

?>
</p>


</div>
</div></div></div><div id="zB"><div class="modWrap"></div></div><div id="zC"><div class="modWrap"></div></div></div></div></div>

<div xmlns="" id="ft"><div id="fWrapper"><div id="fContent"><div id="footerContent" class="editorWrap"><div id="footerZoneElement" class="editable rte flexContent" rel="itemGuid.47ced961b53593.32667673.footerContent"><p>Copyright Berkeley Masjid. All rights reserved. </p><p><a href="http://smallbusiness.yahoo.com/webhosting/" target="_top">Web Hosting by Yahoo!</a></p></div></div></div><div id="fMisc"><div class="contactInfoContainer" style="width:auto;height:auto"><p class="vcard"><span class="adr"><span class="street-address">2716 Derby Street</span><br><span class="locality">Berkeley</span><span class="separator">, </span><span class="region">CA</span> <span class="postal-code">94705</span></span></p></div></div><div id="fBadges"></div></div></div><script xmlns="" language="JavaScript" src="http://us.js2.yimg.com/us.js.yimg.com/lib/smb/js/hosting/cp/js_source/whv2_001.js"></script><script xmlns="" language="javascript">geovisit();</script><noscript xmlns=""><img src="http://visit.webhosting.yahoo.com/visit.gif?us1278634798" alt="setstats" border="0" width="1" height="1"></noscript></div></div></body><script xmlns="" type="text/javascript"></script><script xmlns="" type="text/javascript" src="http://us.yimg.com/lib/smb/assets/hosting/yss/extensions/js/mc_yss_extensions.144201.js"></script></html>



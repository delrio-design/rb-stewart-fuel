<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>RB Stewart Contact Form</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="style2011.css" type="text/css" media="screen" />

</head>


<body >


<?php


function MAIL_NVLP($fromname, $fromaddress, $toname, $toaddress, $subject, $message)

{

   // Copyright ? 2005 ECRIA LLC, http://www.ECRIA.com

   // Please use or modify for any purpose but leave this notice unchanged.

   $headers  = "MIME-Version: 1.0\n";

   $headers .= "Content-type: text/plain; charset=iso-8859-1\n";

   $headers .= "X-Priority: 3\n";

   $headers .= "X-MSMail-Priority: Normal\n";

   $headers .= "X-Mailer: php\n";

   $headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";

   return mail($toaddress, $subject, $message, $headers);

}



$body = "



{$_POST['clientname']}
{$_POST['email']}
{$_POST['phone']}
{$_POST['message']}


";







MAIL_NVLP('RBS Contact Form', 'noreply@rbsfuel.com', 'Pete', 'admin@rbsfuel.com','RBS Contact Form',$body);







include 'contactreply.html';





?>

</body>





</html>
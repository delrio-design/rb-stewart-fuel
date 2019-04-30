<?php
	session_cache_limiter('private, must-revalidate');
	error_reporting (E_ALL);
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Employment Application</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>

<body >

<?php

error_reporting(0);

function MAIL_NVLP($fromname, $fromaddress, $toname, $toaddress, $subject, $message)

{

   // Copyright ? 2005 ECRIA LLC, http://www.ECRIA.com

   // Please use or modify for any purpose but leave this notice unchanged.

   $headers  = "MIME-Version: 1.0\n";

   $headers .= "Content-type: text/html; charset=iso-8859-1\n";

   $headers .= "X-Priority: 3\n";

   $headers .= "X-MSMail-Priority: Normal\n";

   $headers .= "X-Mailer: php\n";

   $headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";

   return mail($toaddress, $subject, $message, $headers);

}

$body = "<html><body>

<h1>RB Stewart Non-Driver Application Form</h1>

<table border=\"1\">
<tr>
<td colspan=\"4\">{$_SESSION['fmlName']}</td>
<td>{$_SESSION['todaysDate']}</td>
</tr>
<tr>
<td colspan=\"3\">{$_SESSION['posSought']}</td>
<td colspan=\"2\">{$_SESSION['email']}</td>
</tr>
<tr>
<td>{$_SESSION['address']}</td>
<td>{$_SESSION['city']}</td>
<td>{$_SESSION['state']}</td>
<td>{$_SESSION['zip']}</td>
<td>{$_SESSION['telephone']}</td>
</tr>
<tr>
<td colspan=\"3\">How were you referred to RBS (agency, employee, friend, newspaper, etc)?</td>
<td colspan=\"2\">List any friends or relatives working for RBS:</td>
</tr>
<tr>
<td colspan=\"4\">{$_SESSION['ref']}</td>
<td rowspan=\"2\">{$_SESSION['frlist']}</td>
</tr>
<tr>
<td colspan=\"3\">Are any of your friends or relatives employed by RBS?</td>
<td>{$_SESSION['friendorrelemployed']}</td>
</tr>
<tr>
<td colspan=\"3\">Can you, after employment, submit verification<br />
of your legal right to work in the United States?</td>
<td>Are you at least eighteen (18)<br />
years of age? </td>
<td>If hired, can you furnish proof of<br />
age?</td>
</tr>
<tr>
<td colspan=\"3\">{$_SESSION['legalVer']}</td>
<td>{$_SESSION['atLeast18']}</td>
<td>{$_SESSION['proofOfAge']}</td>
</tr>
<tr>
<td colspan=\"2\">Type of Employment desired:</td>
<td>{$_SESSION['typeEmployement']}</td>
<td>Date available:</td>
<td>{$_SESSION['dateava']}</td>
</tr>
<tr>
<td>Will you work shifts?</td>
<td>{$_SESSION['workshifts']}</td>
<td></td>
<td>Will you work alternating shifts?</td>
<td>{$_SESSION['workaltshifts']}</td>
</tr>
<tr>
<td>Will you work on weekends?</td>
<td>{$_SESSION['workweekends']}</td>
<td colspan=\"2\">If no to any of the previous, what hours will you work?</td>
<td>{$_SESSION['ifnowhathours']}</td>
</tr>
<tr>
<td colspan=\"4\" rowspan=\"2\">Have you ever been convicted, pled guilty, received deferred adjudication, or pled no contest to a felony or other criminal matter (including DWI or traffic offense other than non-injury traffic or parking)?</td>
<td rowspan=\"2\">{$_SESSION['felony']}</td>
</tr>
<tr>
</tr>
<tr>
<td colspan=\"5\">If yes, please explain.  A response does not automatically exclude you from employment and will be considered only as it relates to your fitness to perform in the position for which you are applying.</td>
</tr>
<tr>
<td colspan=\"5\">{$_SESSION['felonyexplain']}</td>
</tr>
</table>

<h2>Education Data</h2>

<table border=\"1\">
<tr>
<td colspan=\"3\">Highest Year Completed:</td>
<td>{$_SESSION['highestyearcompleted']}</td>
</tr>
<tr>
<td>Level</td>
<td>Name and Location (City, State)</td>
<td>Course or Major</td>
<td>Graduated (Yes or NO)</td>
</tr>
<tr>
<td>High School</td>
<td>{$_SESSION['highschool_name']}</td>
<td>{$_SESSION['highschool_major']}</td>
<td>{$_SESSION['highschool_grad']}</td>
</tr>
<tr>
<td>College</td>
<td>{$_SESSION['college_name_1']}</td>
<td>{$_SESSION['college_major_1']}</td>
<td>{$_SESSION['college_grad_1']}</td>

</tr>
<tr>
<td>College</td>
<td>{$_SESSION['college_name_2']}</td>
<td>{$_SESSION['college_major_2']}</td>
<td>{$_SESSION['college_grad_2']}</td>
</tr>
<tr>
<td>Business/Trade
School</td>
<td>{$_SESSION['bus_trade_name']}</td>
<td>{$_SESSION['bus_trade_major']}</td>
<td>{$_SESSION['bus_trade_grad']}</td>
</tr>
<tr>
<td>Other</td>
<td>{$_SESSION['other_name']}</td>
<td>{$_SESSION['other_major']}</td>
<td>{$_SESSION['other_grad']}</td>
</tr>
</table>

<h2>Employment Data</h2>

<table border=\"1\">

{$_SESSION['currentlyemployed']}
{$_SESSION['contactemployer']}
";

for ($n_index = 1; isset($_SESSION['employer_' . $n_index]); $n_index++) {
	$body .= "
<tr>
<td>Employer:</td>
<td>" . $_SESSION['employer_' . $n_index] . "</td>
<td colspan=\"2\">Dates Employed</td>
<td>Work Performed:</td>
</tr>
<tr>
<td>Address:</td>
<td>" . $_SESSION['address_' . $n_index] . "</td>
<td>From</td>
<td>To</td>
<td rowspan=\"5\">" . $_SESSION['work_performed_' . $n_index] . "</td>
</tr>
<tr>
<td>Telephone Number(s)</td>
<td>" . $_SESSION['tel_num_' . $n_index] . "</td>
<td>" . $_SESSION['de_from_' . $n_index] . "</td>
<td>" . $_SESSION['de_to_' . $n_index] . "</td>
</tr>
<tr>
<td>Starting/present Job:</td>
<td>" . $_SESSION['pres_job_' . $n_index] . "</td>
<td colspan=\"2\">Hourly Rate/Salary</td>
</tr>
<tr>
<td>Supervisor:</td>
<td>" . $_SESSION['supervisor_' . $n_index] . "</td>
<td>From</td>
<td>To</td>
</tr>
<tr>
<td>Reason for leaving:</td>
<td>" . $_SESSION['reasonforleaving_' . $n_index] . "</td>
<td>" . $_SESSION['startsalary_' . $n_index] . "</td>
<td>" . $_SESSION['leavesalary_' . $n_index] . "</td>
</tr>
<tr>
<td colspan=\"4\">Were you employed as a CLD Driver or in any other Safety Sensitive Position subject to DOT Alcohol and Drug Testing?</td>
<td>" . $_SESSION['clddriverq_' . $n_index] . "</td>
</tr>
";

}

$body .= "

<h2>Additional Informaiton</h2>

<p>{$_POST['info_to_consider']}</p>

Date: <b>{$_POST['signdate']}</b>
<br />
Signature: <b>{$_POST['signature']}</b>

</body></html>";

MAIL_NVLP('R.B. Stewart Contact Form', 'noreply@rbsfuel.com', 'R.B. Stewart', 'payroll@rbsfuel.com','Employment Application', $body);

/* include 'example.html'; goes below */

include 'return.html';

?>



</body>

</html>
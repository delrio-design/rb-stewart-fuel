<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>R.B. Stewart Petroleum Products, Inc.</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oleo+Script:400|Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/tablefun.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	</head>
	<body>
		
		<div id="main">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<p> 
					<input type="button" value="Add Passenger" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove Passenger" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
				</p>
               <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
						<td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
						<td>
							<label>Name</label>
							<input type="text" required="required" name="BX_NAME[]">
						 </td>
						 <td>
							<label for="BX_age">Age</label>
							<input type="text" required="required" class="small"  name="BX_age[]">
					     </td>
						 <td>
							<label for="BX_gender">Gender</label>
							<select id="BX_gender" name="BX_gender" required="required">
								<option>....</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						 </td>
						 <td>
							<label for="BX_birth">Berth Pre</label>
							<select id="BX_birth" name="BX_birth" required="required">
								<option>....</option>
								<option>Window</option>
								<option>No Choice</option>
							</select>
						 </td>
							</p>
                    </tr>
                    </tbody>
                </table>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</body>
</html>
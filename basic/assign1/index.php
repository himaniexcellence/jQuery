<html>
<head>
	<title>JQuery 1: Form</title>
<meta charset="utf-8"/>
	<link rel= "stylesheet" type= "text/css" href= "style.css"/>
	<script src= "jquery.js"></script>
	<script src= "validation.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
</head>
<body>
<div id= "body">
	<div id= "top">
		<h1>FORM</h1>
	</div>
	<div id= "content"><br/>
		<form id= "myform">
			<table align= "center" cellspacing= "2px" cellpadding= "20px">
				<tr>
					<td>Name <label class= "star">*</label></td>
						<td><input type= "text" name= "name" id= "name" placeholder="Name" /></td>
				</tr>
				<tr>
					<td>Email <label class= "star">*</label></td>
						<td><input type= "email" name= "email" id= "email" placeholder="Email" /></td>
				</tr>
				<tr>
					<td>Password <label class= "star">*</label></td>
						<td><input type= "password" name= "pswd" id= "pswd" placeholder="Password must contain 8 characters" /></td>
						<td><label onmouseenter= "document.getElementById('pswd').type = 'text'" onmouseleave="document.getElementById('pswd').type = 'password'"><img src="eye.png" width= "20%" height= "20%"></label></td>
				</tr>
				<tr>
					<td>Confirm Password <label class = "star">*</label></td>
						<td><input type= "password" name= "cpswd" id= "cpswd" placeholder="Confirm Password" /></td>
				</tr>
				<tr>
					<td><input type= "checkbox" name= "agree" id= "agree"/>
					Agree To Terms and Conditions <label class = "star">*</label></td>
				</tr>
				<tr><td></td>
					<td><input type= "submit" value= "Submit" id= "submit">
						<input type= "reset" value = "Reset"><!--<a href= "index.php">Reset</a>-->
				</td></tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>
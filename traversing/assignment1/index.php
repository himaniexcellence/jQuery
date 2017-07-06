<html>
<head>
	<title>Checkbox</title>
	<meta charset="utf-8">
	<script src= "jquery.js"></script>
	<script src= "loop.js"></script>
	<style type="text/css">
		ul{
			  list-style-type: none;
		}
		li{
		}
	</style>
</head>
<body>
	<table align= "center" cellspacing= "2px" cellpadding= "3px" border= "1px">
		<form >
			<tr>
				<td>
					<b>Manage Permission</b>	
				</td>
			</tr>
			<tr>
				<td>
					<select>
						<option value= "Morning">Morning</option>
						<option value= "Afternoon">Afternoon</option>
						<option value= "Evening">Evening</option>
						<option value= "Night">Night</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<ul>
						<li id= "checkbox1"><input type= "checkbox"/> Property
							<ul>
								<li id= "subcheck1"><input type= "checkbox"/>Edit Property</li>
								<li id= "subcheck2"><input type= "checkbox"/>Remove Peoperty</li>
								<li id= "subcheck3"><input type= "checkbox"/>Add Property</li>
							</ul>
						</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					<ul>
						<li id= "checkbox2"><input type= "checkbox"/> Testimonial
							<ul>
								<li id= "subcheck4"><input type= "checkbox"/>Add</li>
								<li id= "subcheck5"><input type= "checkbox"/>Remove</li>
								<li id= "subcheck6"><input type= "checkbox"/>View</li>
								<li id= "subcheck7"><input type= "checkbox"/>Edit</li>
							</ul>
						</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					<ul>
						<li id= "checkbox3"><input type= "checkbox"/> Users
							<ul>
								<li id= "subcheck8"><input type= "checkbox"/>Edit User</li>
								<li id= "subcheck9"><input type= "checkbox"/>View User List</li>
								<li id= "subcheck10"><input type= "checkbox"/>Add_User</li>
							</ul>
						</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					<ul>
						<li id= "checkbox4"><input type= "checkbox"/> Membership
							<ul>
								<li id= "subcheck11"><input type= "checkbox"/>Edit Membership</li>
								<li id= "subcheck12"><input type= "checkbox"/>Remove Membership</li>
								<li id= "subcheck13"><input type= "checkbox"/>Add Membership</li>
							</ul>
						</ul>
					</li>
				</td>
			</tr>
			<tr>
				<td>
					<input type= "submit" value= "Submit">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>
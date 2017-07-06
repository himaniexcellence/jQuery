<html>
<head>
	<title>Image Dropdown</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src= "https://code.jquery.com/jquery-1.6.1.min.js"></script>
	<script>
		$(document).ready(function(){
				//Add
               	$("#button").click(function(){
                    $("#file").append("<br/><div id= 'new'><input type='file'/><select><option>Secondary Image</option><option>Primary Image</option></select><input type='button' id='remove' value='Remove'/></div>");
               });
               //Remove
               $("#remove").live('click',function() {
                    $(this).parent().remove();
               });
          });
    </script>
</head>
<body>
	<table align= "center">
		<form>
			<div id= "top">
				<h4>Property Image</h4>
			</div>
			<div id= "content">
				<div id= "left">
					Property Image
				</div>
				<div id= "right">
					<div id= "file">
						<input type="file" id= "file1">
						<select>
							<option>Primary Image</option>
							<option>Secondary Image</option>
						</select>
						<br/><br/>
					</div><br/>
					<input type= "button" name= "add" value= "Add Another" id= "button" />
				</div>
			</div>
		</form>
	</table>
</body>
</html>
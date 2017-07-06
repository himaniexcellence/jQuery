</!DOCTYPE html>
<html>
<head>
	<title>ckEditor</title>
	<head>
		<script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
		
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
</head>
<body>
	<table align= "center" cellpadding= "12px" cellspacing= "2px">
		<tr><b>
			<td><a href= "index.php">FancyBox</a></td>
			<td><a href= "nivo.php">Nivo Slider</a></td>
			<td><a href= "jqzoom.php">jqzoom</a></td>
			<td><a href= "ckeditor.php">CKEDITOR</a></td>
		</tr></b>
	</table><br/>
	<table align= "center"> 
		<tr>
			<td>
				CKEditor in textarea
			</td>
			<td>
				<textarea name= "editor"></textarea>
				<script type="text/javascript">
					CKEDITOR.replace('editor');
				</script>
			</td>
		</tr>
		<tr>
			<td>
				CKEditor in Paragraph( p)
			</td>
			<td>
				<p name= "para"></p>
				<script type="text/javascript">
					CKEDITOR.replace('para');
				</script>
			</td>
		</tr>
	</table>
</body>
</html>
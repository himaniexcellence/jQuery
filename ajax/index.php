<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src= "jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			fetchData();
			function fetchData(){
			    $.ajax({
			        url: 'info.php',
			        dataType: 'json',
			        success: function(json){
			        	$("tr#data").remove();
                        for (var i = 0; i < json.length; i++) {
                            tr = $('<tr id="data">');
                            tr.append("<td>" + json[i].id + "</td>");
                            tr.append("<td>" + json[i].name + "</td>");
                            tr.append("<td>" + json[i].email + "</td>");
                            tr.append("<td>" + json[i].message + "</td>");
                            tr.append("<td>" + json[i].date + "</td></tr>");
                            $("table").append(tr);
                        }
			        }
			    });
		    setTimeout(fetchData, 2000);
		    }
		});
	</script>
</head>
<body>
	<h1 align= "center">Last 5 Rows</h1>
	<table align= "center" cellspacing= "2px" cellpadding= "12px">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Message</th>
			<th>Date</th>
		</tr>
	</table>
</body>
</html>
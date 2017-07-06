<html>
<head>
	<title>FancyBox</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--jQuery Library-->
	<script src= "fancybox/lib/jquery-1.10.2.min.js"></script>
	<!--Mousewheel Plugins-->
	<script src= "fancybox/lib/jquery.mousewheel.pack.js"></script>
	<!--FancyBox-->
	<link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css">
	<script src="fancybox/source/jquery.fancybox.pack.js"></script>
	<!--Buttons, Thumbnails, Media-->
	<link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-buttons.css">
	<script src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
	<script src="fancybox/source/helpers/jquery.fancybox-media.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-thumbs.css">
	<script src="fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
	<script src="fancybox/source/jquery.fancybox.js"></script>

	<script src="query.js"></script>
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
	<table align= "center" cellpadding= "12px" cellspacing= "2px">
		<tr>
			<th>
				Image Gallery
			</th>
		</tr>
		<tr>
			<td>
				<a title= "Image 1" rel="gallery" class="fancybox" href="http://fancyapps.com/fancybox/demo/1_b.jpg"><img src="http://fancyapps.com/fancybox/demo/1_s.jpg" alt=""/></a>
				<a title= "Image 2" rel="gallery" class="fancybox" href="http://fancyapps.com/fancybox/demo/2_b.jpg"><img src="http://fancyapps.com/fancybox/demo/2_s.jpg" alt=""/></a>
			</td>
			<td>
				<a class= "fancybox" data-fancybox-type= "iframe" href= "https://www.polyu.edu.hk/iaee/files/pdf-sample.pdf"><img src= "pdf.jpeg" alt= "pdf" width= "50px" height= "60px">Our Policy</a>
			</td>
		</tr>
	</table>
	<table align= "center" cellpadding= "12px" cellspacing= "2px">
		<tr>
			<th>
				Video Gallery
			</th>
		</tr>
		<tr>
			<td>
				<a title= "Video1" class= "fancybox fancybox.iframe" rel= "gallery" href= "https://www.youtube.com/embed/sgU7q2KYH30"><img src= "fancybox/demo/4_s.jpg" alt= "Video 1"></a>
				<a title= "Video2" class= "fancybox fancybox.iframe" rel= "gallery" href= "https://www.youtube.com/embed/sw4i06Lbw"><img src= "fancybox/demo/5_s.jpg" alt= "Video 2"></a>
			</td>
		</tr>
	</table>
</body>
</html>
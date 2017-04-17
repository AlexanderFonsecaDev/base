<!DOCTYPE html>
<html lang="en">
<head>
	<title>videos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/col_center.css">
		<link rel="stylesheet" href="css/col_right.css">
		<link rel="stylesheet" href="css/color2.css">
		<link rel="stylesheet" href="css/modal_comment.css">
		<link rel="stylesheet" href="includes/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<style type="text/css">
	
.video{float:left;margin: 88px 384px;}
#siguiente{ cursor: pointer;   float: right;}
#anterior{  cursor: pointer;  float: left;}
.bgContainer{    height: 356px;
    margin-left: 51px;}

</style>
</head>
<body>
	<div class="container_video">
		<div class="video">
			<!-- <iframe width="420" height="345" src="https://www.youtube.com/embed/O24AipZ-buQ"></iframe> -->
			<!-- <div class="botones">
				<i class="fa fa-arrow-circle-left fa-2x" id="anterior" aria-hidden="true"></i>
				<i class="fa fa-arrow-circle-right fa-2x" id="siguiente" aria-hidden="true"></i>
			</div> -->

			
		</div>
	</div>
		
		
	

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="nonymous"></script>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>


<script>

$(document).ready(function(){

$(".video").load("cargar_video.php");

});
</script>

</body>
</html>
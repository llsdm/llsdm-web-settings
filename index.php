<?php include 'modules/count.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LLS DM Billboards</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="logo"></div>
		<div class="billbord-title"><b>Билборды</b></div>
	</div>
	<div class="menu-map" id="main-menu">
		<?php include 'modules/menu.php'; ?>
	</div>
	<div style="float: left">
		<div class="radar">
			<?php include 'modules/load.php'; ?>
			<img src="img/radar.jpg" />
		</div>
	</div>
</body>
</html>
<script>
$(document).on("click", ".mapicon", function() {
	var event = $(this);
	var iconid = event.attr("iconid");
	var className = event.attr('class');
	$.ajax({
		type: "POST",
		url: "modules/type.php",
		data: "id=" + iconid,
		success: function(data) {
			if(data == 'error') {
				alert(data);
			} else {
				event.removeClass(className);
				event.addClass(data);

				$.ajax({
					url: "modules/menu.php",
					cache: false,
					success: function(php){
						$("#main-menu").html(php);
					}
				});
			}
		}
	});
});
</script>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<title>Simple markers</title>
		<style>
			html, body {
				height: 100%;
				margin: 0;
				padding: 0;
			}
			#map {
				height: 100%;
			}
		</style>
	</head>
	<body>
		<div id="map"></div>
		<script>
			function initMap() {
				var myLatLng = {
					lat : <?php echo(str_replace("k",".",$_GET['latitude'])); ?>,
					lng : <?php echo(str_replace("k",".",$_GET['longitude'])); ?>
				};

				var map = new google.maps.Map(document.getElementById('map'), {
					zoom : 20,
					center : myLatLng
				});

				var marker = new google.maps.Marker({
					position : myLatLng,
					map : map,
					title : 'Hello World!'
				});
			}

		</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApxnwq-popxt8YYgMuU3kdBLfgm0dhrWg&signed_in=true&callback=initMap"></script>
	</body>
</html>
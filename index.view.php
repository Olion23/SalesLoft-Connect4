<!DOCTYPE html>
<html>
	<head>
		<title>Hello It's Me The Title</title>
	</head>

	<body>
		<canvas id="myCanvas" width="1000" height="600" style="border:1px solid #d3d3d3;">

		<script type="text/javascript">
			var c = document.getElementById("myCanvas");
			var ctx = c.getContext("2d");
			ctx.moveTo(20, 20);
			ctx.lineTo(20, 580);
			ctx.lineTo(980, 580);
			ctx.lineTo(980, 20);
			ctx.stroke();

			//Circles at every 93.33 vertically
			//Middle circle is at x = 480, every 137.14 horizontally

			var verticalSpace = 88;
			var horizontalSpace = 123;

			for (var i = 0; i < 6; i++) {
				for (var j = 0; j < 7; j++) {
					ctx.beginPath();
					ctx.arc(horizontalSpace, verticalSpace, 40, 0, 2*Math.PI);
					ctx.stroke();
					horizontalSpace += 123;
				}
				verticalSpace += 88;
				horizontalSpace = 123;
			}
		</script>
	</body>
</html>
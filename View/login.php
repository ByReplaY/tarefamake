<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="./css/grid.css">
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body style="background: url(./imgs/AbstractGray.jpg);">
	<div class="container container_16">
		<div class="grid_16 prefix_4 suffix_5" 
			style="background: url(./imgs/AbstractGray.jpg); height: 455px; background-position: center bottom; border: 2px #FFF solid;border-radius: 10px;">
			<div class="grid_13 prefix_2 suffix_4 pull_2"
				style="border: 2px #000 solid;border-radius: 10px; background: url(./imgs/GrayLight.jpg); background-position: center bottom; margin-top: 60px;">
				<form method="POST" action="" class="form-horizontal"
					style="border-radius: 10px; color: #FFF; margin-top: 70px;">
					<div class="form-group">
						<label for="inputUsu" class="col-lg-2 control-label">Usu&aacute;rio</label>
						<div class="col-lg-10">
							<input type="text" class="form-control input-sm" id="inputUsu" name="inputUsu"
								placeholder="Usuario">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPass" class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control input-sm"
								id="inputPass"  name="inputPass" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button type="submit" class="btn btn-default">Sign in</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.js"></script>
</body>
</html>
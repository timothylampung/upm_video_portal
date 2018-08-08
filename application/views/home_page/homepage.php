<html>

<head>

	<title> VideoPortal </title>


	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
			integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
			crossorigin="anonymous"></script>


</head>

<style>
	<?php include 'homepage.css'; ?>
</style>

<body>

<center>
	<tr></tr>
	<h1>My Videos</h1>

	<div class="main content padding">

		<div class="row">


			<!--VIDEO 1-->
			<div style="padding: 10px">
				<div class="card" style=" width: 18rem;">
					<video height="240" controls="controls">
						<source src="<?php echo base_url('asset/videos/video9.mp4') ?> " type="video/mp4"/>
					</video>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of
							the
							card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>


			<!--VIDEO 2-->
			<div style="padding: 10px">
				<div class="card" style=" width: 18rem;">
					<video height="240" controls="controls">
						<source src="<?php echo base_url('asset/videos/video9.mp4') ?> " type="video/mp4"/>
					</video>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of
							the
							card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>

			<!--More Video-->


		</div>


</center>

</body>


</html>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Giuseppe Luzzi</title>

		<link href="css/font-awesome.min.css" rel="stylesheet" >
		<link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/bootstrap-material-design.css" rel="stylesheet">
		<link href="css/app.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<div class="jumbotron head">
				<div class="container">
					<h2><a href="/">Giuseppe Luzzi</a></h2>
				</div>
			</div>
			<div class="container">
				<div class="col-md-8">
					<div id="about">
						<h3>/about</h3>

						<p>I'm Peppe and I'm <?php echo(date('Y') - 1997); ?> years old.<br>
						I live in Milan and I'm studying at Politecnico di Milano; in my free time I like to develop things.<br><br>
						I've some experience with multiple programming languages such as
						<ul class="languages-list">
							<li>php</li>
							<li>java</li>
							<li>python</li>
						</ul>
						and some experience with Android apps development and Ubuntu server management.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div id="contacts">
						<h3>/contacts</h3>
						<br>

						<p><i class="fa fa-envelope" aria-hidden="true"></i> email</p>
						<ul>
							<li><a href="mailto:public@giuseppeluzzi.com">public@<span class="lighter">giuseppeluzzi.com</span></a></li>
							<li><a href="mailto:legal@giuseppeluzzi.com">legal@<span class="lighter">giuseppeluzzi.com</span></a></li>
						</ul>

						<p><i class="fa fa-github" aria-hidden="true"></i> github</p>
						<ul>
							<li><a href="https://github.com/GiuseppeLuzzi">profile</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				&copy; <?php echo(date('Y')) ?> Giuseppe Luzzi
			</div>
		</footer>
	</body>
</html>
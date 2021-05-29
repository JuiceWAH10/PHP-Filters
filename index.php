<!--
BSCS3A
Jamora, Joshua O.
Raymundo, Jan Carlo O.
Dimagiba, Rodolfo G.
-->

<?php 
	require_once("functions.php");
	require_once("component.php");
?>

<html>
<head>
	<title> PHP Filters </title>
	<link rel="stylesheet" href="style.css">
	<link href="style2.css" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</head>
<body>
	<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
		<div class="container d-flex align-items-center justify-content-between">
			<div class="d-flex align-items-center">
				BSCS3A
				Jamora x Raymundo
			</div>
		</div>
	</div>
	<br><br><br><br><br><br>
	<div class="container align-items-center w-50 jumbotron" id="accordionExample">	
		<!--Validate an integer within a range-->
		<div class="card ">
			<div class="card-header" id="headingOne">
				<h2 class="mb-0">
				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Validate an Integer within a Range
				</button>
				</h2>
			</div>
			<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body">
					<form action="" method="post">	
						<?php Input("<i class='fas fa-less-than'></i>","Minimum Range", "min","", "number"); ?>
						<?php Input("<i class='fas fa-greater-than'></i>","Maximum Range", "max","", "number"); ?>
						<?php Input("<i class='fas fa-times'></i>","Integer to validate", "int","", "number"); ?>
						<?php Button("validateInt","data-toggle='tooltip' data-placement='bottom' title='Validate'", "btn btn-success", "btn-valInt","<i class='far fa-check-square'></i> Validate"); ?>
					</form>
				</div>
			</div>
		</div>

		<!--Validate IPv6-->
		<div class="card">
			<div class="card-header" id="headingTwo">
				<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				  Validate IPv6
				</button>
				</h2>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="card-body">
					<form action="" method="post">	
						<?php Input("<i class='fas fa-network-wired'></i>","IPv6", "ip","", "text"); ?>
						<?php Button("validateIP","data-toggle='tooltip' data-placement='bottom' title='Validate'", "btn btn-success", "btn-valIP","<i class='far fa-check-square'></i> Validate"); ?>
					</form>
				</div>
			</div>
		</div>

		<!--Validate URL with QueryString-->
		<div class="card">
			<div class="card-header" id="headingThree">
				<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					Validate an URL containing QueryString
				</button>
				 </h2>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				<div class="card-body">
					<form action="" method="post">	
						<?php Input("<i class='fab fa-internet-explorer'></i>","Validate URL", "url","", "url"); ?>
						<?php Button("validateURL","data-toggle='tooltip' data-placement='bottom' title='Validate'", "btn btn-success", "btn-valURL","<i class='far fa-check-square'></i> Validate"); ?>
					</form>
				</div>
			</div>
		</div>

		<!--Remove ASCII < 127-->
		<div class="card">
			<div class="card-header" id="headingFour">
				<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					Remove characters with ASCII value < 127
				</button>
				 </h2>
			</div>
			<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				<div class="card-body">
					<form action="" method="post">	
						<?php Input("<i class='fas fa-font'></i>","Remove ASCII < 127", "ascii","", "text"); ?>
						<?php Button("validateASCII","data-toggle='tooltip' data-placement='bottom' title='Validate'", "btn btn-success", "btn-valASCII","<i class='far fa-check-square'></i> Validate"); ?>
					</form>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>
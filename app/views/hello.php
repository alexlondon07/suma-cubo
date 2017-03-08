<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cubo summation - Laravel PHP Framework 4.2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="welcome">

		<div class="container">
				<div class="row">
					<br />
					<div class="jumbotron">
						<h1>Alexander Londoño Espejo</h1>
						<p> Prueba consiste en un Coding Challenge tomado de Hackerrank: <a href="https://www.hackerrank.com/challenges/cube-summation">Cube Summation</a></p>
						<div class="row">
							<div class="col-md-12">
								<h2>Ejemplo entrada de datos</h2>
								<pre>
								2
								4 5
								UPDATE 2 2 2 4
								QUERY 1 1 1 3 3 3
								UPDATE 1 1 1 23
								QUERY 2 2 2 4 4 4
								QUERY 1 1 1 3 3 3
								2 4
								UPDATE 2 2 2 1
								QUERY 1 1 1 1 1 1
								QUERY 1 1 1 2 2 2
								QUERY 2 2 2 2 2 2
							</pre>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<h2>Entrada de datos</h2>
							<?php
								echo Form::open(array('form-group' ));
								echo Form::submit('Evaluar', array('class'=>'btn btn-success btn-lg'));
								echo Form::textarea('input', '', array('class'=> 'form-control', 'placeholder' => 'Introduce input...'));
								Form::close();
							?>
						</div>
						<div class="col-md-6">
							<h1> Resultado operación </h1>
						</div>
					</div>

					<hr />

				</div>
			</div>
	</div>
</body>
</html>

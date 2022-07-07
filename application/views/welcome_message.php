<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Let's learn about hooks</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
		body{
			background-color: #f5f5f5;
		}
		.heading{
			font-size: 30px;
			color: #08c7ff;
			font-family: sans-serif;
			text-align: center;
			text-decoration: underline;
		}
		.form{
			width: 80%;
			margin: 100px auto;
			/*text-align: center;*/
		}
		.buttonWrapper{
			text-align: center;
		}
	</style>
</head>
<body>

	<h1 class="heading">Hello, Let's Learn about csrf tokens</h1>

		<?php
			$attributes = array('role' => 'form','class' => 'form');
			echo form_open('welcome/submit', $attributes);
		?>
		<h1 id="message">
		</h1>
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name">
		</div>
		<div class="form-group">
			<label for="phone">Phone Number</label>
			<input type="text" class="form-control" id="phone">
		</div>
		<div class="buttonWrapper">

		<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>

</body>
</html>

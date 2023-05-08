<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		.container {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			margin: 100px auto;
			max-width: 500px;
			padding: 20px;
		}

		h1 {
			color: #555;
			font-size: 24px;
			margin-bottom: 20px;
			text-align: center;
		}

		input[type="text"],
		input[type="password"] {
			background-color: #f9f9f9;
			border: none;
			border-radius: 3px;
			box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
			color: #555;
			display: block;
			font-size: 16px;
			margin-bottom: 20px;
			padding: 10px;
			width: 100%;
		}

		input[type="submit"] {
			background-color: #1abc9c;
			border: none;
			border-radius: 3px;
			box-shadow: none;
			color: #fff;
			cursor: pointer;
			display: block;
			font-size: 16px;
			margin: 20px auto 0;
			padding: 10px;
			width: 100%;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #16a085;
		}

		p {
			color: #555;
			font-size: 16px;
			margin-top: 20px;
			text-align: center;
		}

		.error {
			color: #f00;
			font-size: 14px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login Admin</h1>
		<form method="POST" action="login_admin">
			@csrf
			<label for="email">Nom:</label>
			<input type="text" name="email" id="email" required autofocus>
			<label for="password">Password:</label>
			<input type="password" name="pwd" id="password" required>
			@if ($errors->has('email'))
				<p class="error">{{ $errors->first('email') }}</p>
			@endif
			@if ($errors->has('password'))
				<p class="error">{{ $errors->first('password') }}</p>
			@endif
			<input type="submit" value="Login">
		</form>
		<p>Don't have an account? <a href="#">Register</a></p>
	</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>LOGIN</h1>
	<form action="server.php" method="post">
		<input type="email" name="email" placeholder="Enter your email"><br><br>
		<input type="password" name="password" placeholder="Enter you password"><br><br>
		<button name="enter">ENTER</button><br><br>
	</form>
	<h1>REGISTRATION</h1>
	<form action="server.php" method="post">
		<input type="text" name="name" placeholder="name"><br><br>
		<input type="text" name="surname" placeholder="surname"><br><br>
		<input type="text" name="age" placeholder="age"><br><br>
		<input type="text" name="email" placeholder="email"><br><br>
		<input type="text" name="password1" placeholder="password"><br><br>
		<input type="text" name="password2" placeholder="passwordconfirm"><br><br>
		<button name="btn">Save</button>
	</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="image/x-icon" href="/image/power.ico">
</head>
<body>
	<br/>
	<br/>
	<div>
		<center><h2 class="pointer">LOGIN SEDERHANA</h2></center>
	</div>
		
	<br/>
	<div class="login shadow form">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol pointer">
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</html>
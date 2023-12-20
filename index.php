<?php
// session_start();

//Koneksi Database	
$server = "localhost";
$user = "root";
$pass = "";
$database = "inventory";

$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

if (isset($_POST['login'])) {
	$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '" . $_POST['username'] . "' AND password = '" . md5($_POST['password']) . "'");
	if ($sql->num_rows != 0) {
		$data = mysqli_fetch_array($sql);
		$_SESSION['username'] = $data['username'];
	echo"<script>
		alert('Login Anda Berhasil!');
		document.location='list-brg.php';
	 	</script>";
	}else{
		echo        "<script>
						alert('Username atau password salah');
						document.location='index.php';
				     </script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		html,
		body {
			height: 100%;
		}

		.form-signin {
			width: 100%;
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}

		.form-signin .form-control {
			position: relative;
			box-sizing: border-box;
			height: auto;
			padding: 10px;
			font-size: 16px;
		}

		.form-signin .form-control:focus {
			z-index:10;
		}

		.form-signin input[type="password"] {
			margin-bottom: 10px;
            margin-left: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
		.form-signin input[type="checkbox"] {
			margin-bottom: 10px;
            margin-left: 110px;
			padding-top: 50px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
		.form-signin input[type="text"] {
			margin-bottom: 10px;
            margin-left: 5px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
		.form-signin input[type="text"]:focus {
			border: 5px solid greenyellow;
		}
		.form-signin input[type="password"]:focus {
			border: 5px solid greenyellow;
		}
        h1 {
            text-align: center;
        }

        #form-login {
            width: 30%;
            margin-left: 35%;
            margin-top: 5%;
            border: 2px solid black;
        }
        label {
            font-size: 1.2em;
            font-weight: bold;
        }

        button {
            border: 5px solid black;
            border-radius: 1px 10px 1px;
            padding: 5px 5px 5px 5px;
            background-color: white;
            font-size: 2em;
            margin-left: 130px;
            cursor: pointer;
        }

        button:hover {
            background-color: greenyellow;
            transition-duration: 0.5s;
        }
	</style>
</head>

<body class="text-center">
	<?php isset($_SESSION['username']) ? include "list-brg.php" : '' ?>
	<br /><br /><br /><br />
	<div class="container">
		<?php if (isset($_SESSION['username'])) : ?>
		<?php else : ?>
            <div id='form-login'>
			<form class="form-signin" method="post" action="">
				<img src="https://media.licdn.com/dms/image/C4D1BAQHxINS0YZXisg/company-background_10000/0/1583792331401/login_nl_cover?e=2147483647&v=beta&t=2JAw5A2BBCd-5HDuUfdOcZDbdPiXKnDysc3kf-kwKyg" alt="" width="300px" height="100px">
				<br><br><br>
				<label for="username">Username :</label>
				<input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required>
                <br><br>
				<label for="inputPassword">Password :</label>
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<input type="checkbox" name="check" id="check" class="form-control">
				<label for="check">Tampil Password</label>
				<br><br>
				<button type="submit" name="login">LOGIN</button>
			</form>
		</div>
    </div>
<?php endif; ?>
<script>
	check.onclick = togglePassword;
	function togglePassword() {
		if (check.checked) {
			inputPassword.type = "text";
		} else {
			inputPassword.type = "password";
		}
	}
</script>
</body>
</html>
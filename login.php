<?php
require 'functions.php';

if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];


	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


	if (mysqli_num_rows($result) === 1) {

		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			$_SESSION["login"] = true;

			header("Location: tampilan.php");
			exit;
		}
	}

	$error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>
	<form action="" method="post">
		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/train.jpg');">
				<div class="wrap-login100">
					<form class="login100-form validate-form">
						<span class="login100-form-logo">
							<i class="fa fa-subway"></i>
						</span>

						<span class="login100-form-title p-b-34 p-t-27">
							Login
						</span>

						<?php if (isset($error)) : ?>

							<center>
								<p style="color: red; font-style: italic;">username / password salah</p>
							</center>

						<?php endif; ?>

						<div class="wrap-input100 validate-input" data-validate="Masukkan Username">
							<input class="input100" type="text" name="username" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Masukkan password">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>

						<p><a href="registration.php" class="text-light">
								<center>Belum Punya Akun?</center>
							</a></p>

						<div class="container-login100-form-btn">
							<a href="tampilan.php">
								<button class="login100-form-btn mt-3" name="login">
									Login
								</button>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- footer -->
    <footer class=" text-dark">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="text-light">
                        <center>Copyright &#169; Kereta Api Indonesia
                    </p>
                    <h3>Contact us</h3>
                    <a href="https://instagram.com/legeviginaga_?igshid=10h5s4cjzdjrt" class="text-dark"><i class="fab fa-instagram"></i> @legeviginaga_</a>
                    <a href="https://instagram.com/risti.nrfth?igshid=10h5s4cjzdjrt" class="text-dark"><i class="fab fa-instagram"></i> @risti.nrfth</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir footer -->

	<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
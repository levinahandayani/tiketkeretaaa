<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Registration</title>
</head>

<body>
    <div class="p-3 mb-1 bg-info">
        <form class="container mb-5" action="" method="post">
            <div class="row w-50 mx-auto mt-5">
                <div class="p-3 mb-2 bg-secondary text-white col-md-10 ml-5">
                    <h2 class="mt-3"><b>
                            <center>Registrasion Account</center><b></h2>
                    <div class="col-md-12 mb-2">
                        <label for="name"></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="name" placeholder="Username" name="username" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-2">
                        <label for="password"></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a password
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="password2"></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-redo-alt"></i></span>
                            </div>
                            <input type="password" class="form-control" id="password2" placeholder="Confirm Password" name="password2" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a password
                            </div>
                        </div>
                    </div>

                    <a class="text-light" href="login.php">
                        <p class="mt-4">
                            <center>Sudah Punya Akun?</center>
                        </p>
                    </a>

                    <button class="btn btn-info text-light col-md-9 ml-5 mt-3 mb-2" type="submit" name="register">Daftar</button>

                </div>
            </div>
        </form>

        <!-- footer -->
         <footer>
        <div class="container mt-5">
            <div class="row">
                <div class="col text-center">
                    <p class="text-dark">
                        <center>Copyright &#169; Kereta Api Indonesia 
                    </p>
                    <h3 class="text-dark">Contact us</h3>
                    <a href="https://instagram.com/legeviginaga_?igshid=10h5s4cjzdjrt" class="text-dark"><i class="fab fa-instagram"></i> @legeviginaga_</a> |
                    <a href="https://instagram.com/risti.nrfth?igshid=10h5s4cjzdjrt" class="text-dark"><i class="fab fa-instagram"></i> @risti.nrfth</a>
                </div>
            </div>
        </div>
    </footer>
 </div>
<!-- Akhir footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
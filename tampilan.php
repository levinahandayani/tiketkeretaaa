<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>tampilan kereta api</title>
</head>

<body>
    <!-- Image and text -->

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E6E6FA;">
        <a class="navbar-brand" >
            <img src="img/logoo.jpg" width="55" height="35" class="d-inline-block align-top" alt="">
            Kereta Api Indonesia
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="form-inline my-2 my-lg-1">
                <a class="nav-item nav-link" href="pemesanan.php">Pesan Tiket</a>
                <a class="nav-item nav-link" href="jadwal.php">Jadwal Kereta</a>
                <a class="nav-item nav-link" href="data.php">Data Pemesanan</a>
                <a class="nav-item nav-link" href="Syarat.html">Syarat & Ketentuan</a>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="form-inline">
                    <a href="logout.php">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Logout</button>
                    </a>
                    <a href="logout.php">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Login</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/iklan.png" class="d-block w-100" height="600px" alt="tiket">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/iklan1.jpg" class="d-block w-100" height="600px" alt="api">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/iklan2.jpg" class="d-block w-100" height="600px" alt="kereta">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- footer -->
    <footer class="bg-white text-dark">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="text-light">
                        <center>&#169; Kereta Api Indonesia
                    </p>
                    <h3>Contact us</h3>
                    <a href="https://instagram.com/legeviginaga_?igshid=10h5s4cjzdjrt" class="text-dark"><i class="fab fa-instagram"></i> @legeviginaga_</a>
                    <a href="https://instagram.com/risti.nrfth?igshid=10h5s4cjzdjrt" class="text-dark"><i class="fab fa-instagram"></i> @risti.nrfth</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style/style.css">
    <?php if(isset($_COOKIE['nav'])) {
        if($_COOKIE['nav'] == 'blue') { ?>
        <style>
            .header {
                background-color: blue;
            }
            .footer {
                background-color: blue;
            }
        </style>
    <?php } } ?>

    <?php if(isset($_COOKIE['nav'])) {
        if($_COOKIE['nav'] == 'yellow') { ?>
        <style>
            .header {
                background-color: yellow;
            }
            .footer {
                background-color: yellow;
            }
        </style>
    <?php } } ?>

    <?php if(isset($_COOKIE['nav'])) {
        if($_COOKIE['nav'] == 'red') { ?>
        <style>
            .footer {
                background-color: red;
            }
            .header {
                background-color: red;
            }
        </style>
    <?php } } ?>
    <title>Show Room</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
            <a class="nav-link active" aria-current="page" href="Login-Najla.php"></a>
      </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center" style="margin-top: 50px;">
        <?php 
        session_start();
        if(!empty($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['error'] ?>
        </div>
        <?php }
        $_SESSION['error'] = "";
        ?>
        <?php
        if(!empty($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['success'] ?>
            </div>
            <?php }
            $_SESSION['success'] = "";
            ?>
            <div class="col-4">
                <form method="post" action="config/check_login.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Masukan Alamat E-mail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Kata Sandi Anda" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <br>
                    <label class="form-check-label" for="exampleCheck1">Belum punya akun? <a
                            href="Register-Najla.php">Register</a></label>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col" style="text-align: center; margin-top: 10px;">
                <span class="text text-white">&copy;2022 Copyright: <a href="#" data-bs-toggle="modal" data-bs-target="#nimModal">NAJLA ALYA RAHADIANTI 1202204322</a></span>
            </div>
        </div>
    </div>

    <div class="modal fade" id="nimModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Created By</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Nama : Najla Alya Rahadianti
            <br>
            NIM : 1202204322
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
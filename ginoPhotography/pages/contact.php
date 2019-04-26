<?php session_start() ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Gino Photography</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gino Photography</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="biography.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gallery
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="bandw.php">Black & White</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="landscape.php">Landscapes</a>
                        <a class="dropdown-item" href="portrait.php">Portraits</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="subscribe.php">Subscribe</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>

            <div class="nav-item dropdown my-2 my-lg-0">
                <a class="nav-link dropdown-toggle text-dark" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                </a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg-right">
                    <form class="px-4 py-3" action="login.php" method="POST">
                        <div class="form-group">
                            <label for="txtEmail">Email address</label>
                            <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="txtPass">Password</label>
                            <input type="password" class="form-control" id="txtPass" name="txtPass" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="rememberMe" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-dark" value="Log in" name="submit">
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="signUp.php">New around here? Sign up</a>
                    <a class="dropdown-item" href="forgot.php">Forgot password?</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-4">

            <div class="col-md-6">

                <h3>Feel free to contact me and ask me anything!</h3>

                <form method="POST" action="pages/success.php">
                    <div class="form-group row mt-4">
                        <label for="firstName" class="col-sm-2 col-form-label">First name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lastName" class="col-sm-2 col-form-label">Last name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mobileNo" class="col-sm-2 col-form-label">Mobile number</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" name="mobileNo" id="mobileNo" placeholder="+356 7945 1385" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-5 text-justify">
                <h3>Contact</h3>
                <p>If you would like to contact me, ask me any questions or anythings, then please fill in your details and I will get back to you as soon as
                    possible.</p>
            </div>
        </div>
    </div>

    <footer class="mt-4 bg-dark text-center text-white">
        <div class="py-2">Website developed by <u>Gabriel Muscat Mills</u> - All rights reserved</div>
    </footer>




    <!-- Optional JavaScript -->
    <script src="../js/main.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
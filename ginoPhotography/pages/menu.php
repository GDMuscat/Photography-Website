<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title>Gino Photography</title>
</head>

<!-- Two navigation bars were written. This is because one is for the index.php and the other is for the other pages.
However, only one navigation bar is displayed. This was done by a conditional statement ('if' statement)  -->

<body oncontextmenu="noRightClick()">

    <?php
    $pagename = basename($_SERVER['PHP_SELF']);

    // If ihe page is 'index.php'
    if ($pagename == "index.php") { ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Gino Photography</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pages/biography.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gallery
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="pages/bandw.php">Black & White</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages/landscape.php">Landscapes</a>
                            <a class="dropdown-item" href="pages/portrait.php">Portraits</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/subscribe.php">Subscribe</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="pages/contact.php">Contact</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </form>

                <?php
                if (isset($_SESSION['email'])) { /* If  session was created... */ ?>

                    <!-- Create the 'logout' tab -->
                    <div class="nav-item dropdown my-2 my-lg-0">
                        <a class="nav-link dropdown-toggle text-dark" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Logout
                        </a>
                        <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg-right">
                            <div class="text-center px-4 py-3">
                                <p>Hello <b> <?php echo "$_SESSION[email]" ?></b></p>
                                <form method="post" action="pages/processLogin.php">
                                    <input type="submit" class="btn btn-dark" value="Logout" name="logout">
                                </form>
                            </div>
                        </div>
                    </div>

                <?php } else { ?>

                    <!-- Create the 'login' tab -->
                    <div class="nav-item dropdown my-2 my-lg-0">
                        <a class="nav-link dropdown-toggle text-dark" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg-right">
                            <form class="px-4 py-3" action="pages/processLogin.php" method="POST">
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
                            <a class="dropdown-item" href="pages/signUp.php">New around here? Sign up</a>
                            <a class="dropdown-item" href="pages/forgot.php">Forgot password?</a>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </nav>

    <?php } else { ?>
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

                <?php
                if (isset($_SESSION['email'])) { /* If  session was created... */ ?>

                    <!-- Create the 'logout' tab -->
                    <div class="nav-item dropdown my-2 my-lg-0">
                        <a class="nav-link dropdown-toggle text-dark" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Logout
                        </a>
                        <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg-right">
                            <div class="text-center px-4 py-3">
                                <p>Hello <b> <?php echo "$_SESSION[email]" ?></b></p>
                                <form method="post" action="processLogin.php">
                                    <input type="submit" class="btn btn-dark" value="Logout" name="logout">
                                </form>
                            </div>
                        </div>
                    </div>

                <?php } else { ?>

                    <!-- Create the 'login' tab -->
                    <div class="nav-item dropdown my-2 my-lg-0">
                        <a class="nav-link dropdown-toggle text-dark" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg-right">
                            <form class="px-4 py-3" action="processLogin.php" method="POST">
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

                <?php } ?>

            </div>
        </nav>
    <?php } ?>
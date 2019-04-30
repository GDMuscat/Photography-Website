<?php session_start();

$conn = mysqli_connect("localhost", "root", "", "photography_db", 3307);

if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database. Please try again later";
    exit;
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

    <!-- Optional CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <title>Gino Photography</title>
</head>


<body oncontextmenu="noRightClick()">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gino Photography</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
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
                <li class="nav-item">
                    <a class="nav-link" href="pages/contact.php">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>

            <?php
            if (isset($_SESSION['email'])) { /* If  session was created... */ ?>

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

            <?php } else {
            /* session not created */
            loginTab();
        } ?>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid text-center bg-transparent">
        <div class="container">
            <h1 class="display-3">Eugene Photography</h1>
        </div>
    </div>

    <div class="container-fluid">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column 1 -->
            <div class="col-md-12 mb-3">

                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" class="img-fluid z-depth-1" alt="Responsive image" data-toggle="modal" data-target="#myModal1">
            </div>
        </div>


        <!-- Grid row -->
        <div class="row">

            <!-- Grid column 2 -->
            <div class="col-lg-4 col-md-12 mb-3">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(115).jpg" class="img-fluid z-depth-1" alt="Responsive image" data-toggle="modal" data-target="#myModal2">
            </div>


            <!-- Grid column 3 -->
            <div class="col-lg-4 col-md-6 mb-3">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(116).jpg" class="img-fluid z-depth-1" alt="Responsive image" data-toggle="modal" data-target="#myModal3">
            </div>


            <!-- Grid column 4 -->
            <div class="col-lg-4 col-md-6 mb-3">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(117).jpg" class="img-fluid z-depth-1" alt="Responsive image" data-toggle="modal" data-target="#myModal4">

            </div>
        </div>


        <!-- Grid row -->
        <div class="row">

            <!-- Grid column 5 -->
            <div class="col-md-6 mb-3">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(117).jpg" class="img-fluid z-depth-1" alt="Responsive image" data-toggle="modal" data-target="#myModal5">
            </div>

            <!-- Grid column 6 -->
            <div class="col-md-6 mb-3">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(129).jpg" class="img-fluid z-depth-1" alt="Responsive image" data-toggle="modal" data-target="#myModal6">
            </div>
        </div>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column 7 -->
            <div class="col-lg-4 col-md-12 mb-3">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(115).jpg" class="img-fluid z-depth-1" alt="Responsive image" data-toggle="modal" data-target="#myModal2">
            </div>


            <!-- Grid column 8 -->
            <div class="col-lg-4 col-md-6 mb-3">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(116).jpg" class="img-fluid z-depth-1" alt="Responsive image" data-toggle="modal" data-target="#myModal3">
            </div>


            <!-- Grid column 9 -->
            <div class="col-lg-4 col-md-6 mb-3">

                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(117).jpg" class="img-fluid z-depth-1" alt="Responsive image" data-toggle="modal" data-target="#myModal4">

            </div>
        </div>

        <div>

            <!-- Modal 1 -->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-default btn-prev">Prev</button>
                            <button type="button" class="btn btn-default btn-next">Next</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(115).jpg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-default btn-prev">Prev</button>
                            <button type="button" class="btn btn-default btn-next">Next</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(116).jpg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-default btn-prev">Prev</button>
                            <button type="button" class="btn btn-default btn-next">Next</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 4 -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(117).jpg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-default btn-prev">Prev</button>
                            <button type="button" class="btn btn-default btn-next">Next</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 5 -->
            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(117).jpg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-default btn-prev">Prev</button>
                            <button type="button" class="btn btn-default btn-next">Next</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 6 -->
            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(129).jpg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-default btn-prev">Prev</button>
                            <button type="button" class="btn btn-default btn-next">Next</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <footer class="mt-4 bg-dark text-center text-white">
        <div class="py-2">Website developed by <u>Gabriel Muscat Mills</u> - All rights reserved</div>
    </footer>

    <?php /* functions */

    function loginTab()
    {
        ?>
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
                <a class="dropdown-item" href="forgot.php">Forgot password?</a>
            </div>
        </div>
    <?php } ?>

    <!-- Optional JavaScript -->
    <script src="js/main.js"></script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
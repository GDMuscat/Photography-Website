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

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gino Photography</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
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
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
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
                            <form method="post" action="login.php">
                                <input type="submit" class="btn btn-dark" value="Logout" name="logout">
                            </form>
                        </div>
                    </div>
                </div>

                <?php logout();
            } else {
                /* session not created */
                loginTab();
            } ?>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-6">

                <?php
                if (isset($_POST['submit'])) {

                    if ((!isset($_POST['txtEmail'])) || (!isset($_POST['txtPass']))) {
                        echo "Both values must be submitted.";
                    } else {
                        $email = $_POST['txtEmail'];
                        $password = $_POST['txtPass'];


                        $query = "SELECT COUNT(*) FROM tblclient WHERE email = '$email' and password = sha1('$password')"; // hashed password present
                        $result = mysqli_query($conn, $query) or die("Error in query: " . mysqli_error($conn));

                        $row = mysqli_fetch_row($result);
                        $count = $row[0];

                        if ($count > 0) {


                            // create session
                            $_SESSION['email'] = $email;

                            // visitor's name and password combination are correct
                            echo "<h1>Login Successful.</h1><p>Welcome back to my website!</p>";
                        } else {

                            // visitor's name and password combination are incorrect.
                            echo "<h1>Login failed.</h1><p>Your credentials are incorrect.</p>";
                        }
                        ?>
                    </div>

                    <?php
                    loginForm(); // loginForm() has its own column.
                }
            } else if (isset($_POST['logout'])) {
                logout();
            }
            ?>
        </div>
    </div>

    <footer class="mt-4 bg-dark text-center text-white">
        <div class="py-2">Website developed by <u>Gabriel Muscat Mills</u> - All rights reserved</div>
    </footer>

    <?php /* functions */
    function logout()
    {

        if (isset($_POST['logout'])) {
            $_SESSION = array();
            session_destroy(); ?>

            <div class="row">
                <div class="col-sm-12">
                    <h1>You have successfully logged out.</h1>
                    <p>Please refresh the page so that changes will be affected.</p>
                </div>
            </div>


        <?php }
} ?>

    <?php
    function loginTab()
    {
        ?>
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
    <?php }
function loginForm()
{ ?>
        <div class="col-sm-6">
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
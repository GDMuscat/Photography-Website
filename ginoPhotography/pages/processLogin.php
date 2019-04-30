<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "photography_db", 3307);

if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database. Please try again later";
    exit;
}

// if email/password is/are empty...
if ((!isset($_POST['txtEmail'])) || (!isset($_POST['txtPass']))) {

    // create fill both session
    $_SESSION['fillBothMessage'] = "<div class='row'>
        <div class='col-sm-12'>
            <h1>Warning!</h1>
            <p>You must enter your email and your password.</p>
            </div>
        </div>";

    header('Location: login.php');
} else {
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPass'];

    // clear all sessions
    $_SESSION = array();

    $query = "SELECT COUNT(*) FROM tblclient WHERE email = '$email' and password = sha1('$password')"; // hashed password present
    $result = mysqli_query($conn, $query) or die("Error in query: " . mysqli_error($conn));

    $row = mysqli_fetch_row($result);
    $count = $row[0];

    if ($count > 0) {

        // create session - CORRECT EMAIL AND PASSWORD
        $_SESSION['email'] = $email;

        // create login message
        $_SESSION['loginMessage'] = "<div class='row'>
        <div class='col-sm-12'>
            <h1>You have successfully logged in.</h1>
            <p>Welcome to my website.</p>
            </div>
        </div>";

        header('Location: login.php');
    } else {
        // create re-login session
        $_SESSION['incorrect'] = "<div class='row'>
        <div class='col-sm-6'>
            <form class='px-4 py-3' action='processLogin.php' method='POST'>
                <div class='form-group'>
                    <label for='txtEmail'>Email address</label>
                    <input type='email' class='form-control' id='txtEmail' name='txtEmail' placeholder='email@example.com'>
                </div>
                <div class='form-group'>
                    <label for='txtPass'>Password</label>
                    <input type='password' class='form-control' id='txtPass' name='txtPass' placeholder='Password'>
                </div>
                <input type='submit' class='btn btn-dark' value='Log in' name='submit'>
            </form>
            <div class='dropdown-divider'></div>
            <a class='dropdown-item' href='signUp.php'>New around here? Sign up</a>
            <a class='dropdown-item' href='forgot.php'>Forgot password?</a>
        </div>

        <div class='col-sm-6'>
            <h1>Login failed</h1>
            <p>Please enter your correct credntials.</p>
        </div>
        </div>";

        // INCORRECT EMAIL AND/OR PASSWORD
        header('location: login.php');
    }
}

// if logout is clicked...
if (isset($_POST['logout'])) {

    //clear all sessions
    $_SESSION = array();

    // create logout message
    $_SESSION['logoutMessage'] = "<div class='row'>
        <div class='col-sm-12'>
            <h1>You have successfully logged out.</h1>
            <p>Thank you for your kind visit.</p>
        </div>
    </div>";

    header('location: login.php');
}

function loginForm()
{ ?>
    <div class="col-sm-6">
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

    <div class='col-sm-6'>
        <h1>Login failed</h1>
        <p>Please enter your correct credntials.</p>
    </div>

<?php } ?>
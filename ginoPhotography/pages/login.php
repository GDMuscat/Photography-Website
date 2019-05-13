<?php

require_once("connection.php");
require_once("menu.php");

?>

<div class="container-fluid">
    <?php
    if (isset($_SESSION['fillBothMessage'])) {
        echo "$_SESSION[fillBothMessage]";
    } else if (isset($_SESSION['loginMessage'])) {
        echo "$_SESSION[loginMessage]";
        header("Refresh:3; url=../index.php");
    } else if (isset($_SESSION['incorrect'])) {
        echo "$_SESSION[incorrect]";
    } else if (isset($_SESSION['logoutMessage'])) {
        echo "$_SESSION[logoutMessage]";
        session_destroy(); // destroy session
        header("Refresh:3; url=../index.php");
    } else {
        echo "Error! unexpected event occurred!";
    }
    ?>
</div>

<?php
function loginTab()
{
    ?>
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
<?php }

function logout()
{
    ?>
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
<?php
}
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

<?php }
require_once("footer.php"); ?>
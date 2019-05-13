<?php

require_once("connection.php");
require_once("menu.php");

?>

<div class="container-fluid">
    <div class="row mt-4">

        <div class="col-md-6">

            <h3>Create an account</h3>

            <form method="POST" action="signUp.php">
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
                    <label for="town" class="col-sm-2 col-form-label">Town:</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" name="town" id="town" placeholder="New Jersey" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="txtEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="txtPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password" required>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="submit" value="Submit" name="submit" class="btn btn-dark">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md text-justify">
            <h3>Register</h3>
            <p>By registering to our my website, you will be able to benefit from certain privelages such as commenting, and even rating each individual photo.</p>
            <?php
            if (isset($_POST['submit'])) {
                insertInto();
            }
            ?>
        </div>
    </div>
</div>


<?php /* functions */

function insertInto()
{
    $conn = mysqli_connect("localhost", "root", "", "photography_db", 3307);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database. Please try again later";
        exit;
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mobileNo = $_POST['mobileNo'];
    $town = $_POST['town'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    // Check if email or Mobile No. already exist
    $query = "SELECT COUNT(*) FROM tblClient WHERE mobileNo = '$mobileNo' OR email = '$email'";
    $result = mysqli_query($conn, $query) or die("Error in query:1 " . mysqli_error($conn));

    $row = mysqli_fetch_row($result);
    $x = $row[0];

    // if a duplicate exists
    if ($x > 0) {
        echo "<div class='col-md alert alert-danger' role='alert'>
                    <h3>Error!</h3>
                    <p>Mobile number and/or email address already exist. Please enter new credentials.</p>
                </div>";
    } else {

        // Check if town exists
        $query = "SELECT COUNT(*) FROM `tbltown` WHERE `town` = '$town'";
        $result = mysqli_query($conn, $query) or die("Error in query: " . mysqli_error($conn));

        $row = mysqli_fetch_row($result);
        $y = $row[0];

        if ($y > 0) {

            // Selecting the entire row of the particular town
            $query = "SELECT * from tbltown WHERE `town` = '$town'";
            $result = mysqli_query($conn, $query) or die("Error in query:1 " . mysqli_error($conn));

            // Getting the town id
            $row = mysqli_fetch_row($result);
            $tId = $row[0];

            // adding the user's details to the database
            $query = "INSERT INTO `tblClient` (`firstName`, `lastName`, `mobileNo`, `email`, `password`, `townId`) VALUES ( '$firstName',  '$lastName',  '$mobileNo',  '$email', SHA1('$password'), '$tId')";
            $result = mysqli_query($conn, $query) or die("Error in query: " . mysqli_error($conn));
            echo "<div class= 'col-md alert alert-success' role='alert'>
                    <h3>Success!</h3>
                    <p>Your account has been successfully registered. Welcome to my website!</p>
                </div>";
        } else {

            // Adding the town to the database
            $query = "INSERT INTO `tbltown` (`town`) VALUES ('$town')";
            $result = mysqli_query($conn, $query) or die("Error in query:1 " . mysqli_error($conn));

            // Selecting the entire row of the particular town
            $query = "SELECT * from tbltown WHERE `town` = '$town'";
            $result = mysqli_query($conn, $query) or die("Error in query:1 " . mysqli_error($conn));

            // Getting the town id
            $row = mysqli_fetch_row($result);
            $tId = $row[0];

            // adding the user's details to the database
            $query = "INSERT INTO `tblClient` (`firstName`, `lastName`, `mobileNo`, `email`, `password`, `townId`) VALUES ( '$firstName',  '$lastName',  '$mobileNo',  '$email', SHA1('$password'), '$tId')";
            $result = mysqli_query($conn, $query) or die("Error in query: " . mysqli_error($conn));
            echo "<div class= 'col-md alert alert-success' role='alert'>
                    <h3>Success!</h3>
                    <p>Your account has been successfully registered. Welcome to my website!</p>
                </div>";
        }
    }
}

require_once("footer.php"); ?>
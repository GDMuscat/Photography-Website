<?php

require_once("connection.php");
require_once("menu.php");
?>

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

<?php require_once("footer.php"); ?>
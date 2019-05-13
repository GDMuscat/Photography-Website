<?php

require_once("connection.php");
require_once("menu.php");

?>

<div class="container-fluid">
    <div class="row mt-4">

        <div class="col-md-6">

            <h3>Please subscribe to my page</h3>

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

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Receive updates?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-5 text-justify">
            <h3>Subscription</h3>
            <p>If you would like to receive updates on when I post a new image, please enter your details and choose
                <b>Yes</b>. All the information that you provide will never be shared by anyone and it will be stored securely.</p>
            <p>If you wish to subscribe, but do not want to receive any updates, then you are free to tick <b>No</b> in the specific field.</p>

            <h5>Why should I subscribe?</h5>
            <p>If you subscribe to my page, then you will receive updates and notifications of the newly posted photos (Only if you ticked <b>Yes</b> in the specific field). Therefore, you will always see the updates as soon as possible.</p>
        </div>
    </div>
</div>

<?php require_once("footer.php"); ?>
<?php if (isset($_SESSION['email'])) { ?>

    <!-- This is a centered row -->
    <div class="row mt-4 text-center">
        <div class="col-sm p-1">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalComments">
                Comments
            </button>
        </div>
        <div class="col-sm p-1">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalAdmin">
                Admin commands
            </button>
        </div>
    </div>

    <!-- Modal user -->
    <div class="modal fade" id="modalComments" tabindex="-1" role="dialog" aria-labelledby="modalCommentsTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCommentsTitle">Comments</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <?php

                    // Get All comments
                    $query = "SELECT * from tblcomment";
                    $result = mysqli_query($conn, $query) or die("Error in query: " . mysqli_error($conn));

                    // Printing the comments
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<p>$_SESSION[email] - $row[1]</p>";
                    }
                    ?>

                    <form action="pages/processLogin.php" method="post">
                        <input type="text" class="form-control" name="txtComment" id="txtComment" placeholder="Add comment" required>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Add comment" name="submitComment" id="submitComment">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- If the master account has been logged in... -->
    <?php if ($_SESSION['email'] == "masteraccount@gmail.com") { ?>

        <!-- Modal Admin -->
        <div class="modal fade" id="modalAdmin" tabindex="-1" role="dialog" aria-labelledby="modalAdmin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAdmin">Admin commands</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row  justify-content-center">
                            <div class=" col-sm">
                                <label for="txtFile">Add photo: </label>
                            </div>
                            <div class="col-sm">
                                <input type="file" name="txtFile" id="txtFile">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-default">Add photo</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default">Delete photo</button>
                    </div>
                </div>
            </div>
        </div>

    <?php }
} ?>
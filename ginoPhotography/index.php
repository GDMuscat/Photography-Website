<?php

require_once("pages/connection.php");
require_once("pages/menu.php");

?>

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

    <div id="myModals">

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

    <?php if (isset($_SESSION['email'])) { ?>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalComments">
            Comments
        </button>

        <!-- Modal -->
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

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form action="index.php" method="post">
                            <input type="button" class="btn btn-primary" value="Add comment" name="btnAdd" id="btnAdd">
                        </form>
                        <?php
                        if (isset($_POST['btnAdd'])) { 
                            // ADD MORE CODE HERE
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

</div>

<?php require_once("pages/footer.php"); ?>
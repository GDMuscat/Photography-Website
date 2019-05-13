<?php

require_once("connection.php");
require_once("menu.php");

?>

<!-- Title -->
<div class="jumbotron jumbotron-fluid text-center bg-transparent">
    <div class="container">
        <h1 class="display-3">Black and White</h1>
    </div>
</div>

<!-- Carousel -->
<div id="carouselBandw" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselBandw" data-slide-to="0" class="active"></li>
        <li data-target="#carouselBandw" data-slide-to="1"></li>
        <li data-target="#carouselBandw" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../images/image1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../images/image2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../images/image3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselBandw" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselBandw" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid mt-5">

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

<?php require_once("footer.php"); ?>
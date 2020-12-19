<div class="container py-4 my-4 min-vh-100">
    <div class="row">
        <div class="col-sm ">
            <div id="carous" class="carousel slide rounded" data-ride="carousel" width="50%">
            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li data-target="#carous" data-slide-to="0" class="active"></li>
            <li data-target="#carous" data-slide-to="1"></li>
            <li data-target="#carous" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= IMG_PATH . "pic1.jpg"; ?>" alt="Los Angeles" width="100%">
            </div>
            <div class="carousel-item">
                <img src="<?= IMG_PATH . "pic2.jpg"; ?>" alt="Chicago" width="100%">
            </div>
            <div class="carousel-item">
                <img src="<?= IMG_PATH . "pic3.jpg"; ?>" alt="New York" width="100%">
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#carous" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carous" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>

            </div>
        </div>
        <div class="col-sm"></div>
    </div>
</div>
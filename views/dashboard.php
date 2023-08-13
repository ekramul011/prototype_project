<?php include "header.php"; ?>

<div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="slider">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./assets/img/slider/3.jpg" alt="" width="100%" height="250px"/>
        </div>
        <?php foreach ($sliders as $slider) {?>
            <div class="carousel-item">
                <img src="<?php echo  $slider['image'];?>" alt="" class="" width="100%" height="250px"/>
            </div>
        <?php } ?>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body">
                    <marquee class="welcome-text">Welcome To Dashboard</marquee>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>

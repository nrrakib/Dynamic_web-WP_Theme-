<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma Bridge</title>
    <?php wp_head();?>
</head>
<body>
    
<!-- ---header part start--- -->
<header class="carousel-fluid slider">
    <div class="row">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $x=0;
            while(have_posts()){ the_post();
            $x++;
            ?>
            <div class="carousel-item <?= ($x==1)?'active': '' ?> ">
                <?php the_post_thumbnail(); ?>
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            </div>
            <?php } ?>

            <!-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
</header>
<!-- ---header part end---- -->

<!-- ---logo part end---- -->
<section class="logo container-fluid pt-2">
    <div class="row">
        <div class="col-sm-6 logo-left">
            <?php the_custom_logo();?>
        </div>
        <div class="col-sm-6 logo-right text-end">
            <?php dynamic_sidebar('bdlogo');?>
        </div>
    </div>
</section>
<!-- ---logo part end---- -->

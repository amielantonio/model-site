<?php 

$hero = get_field('hero_section');

?>

<section class="section--home-hero" id="section--home-hero">

    <div class="section--home-hero__object">

        <video loop autoplay muted class="section--home-hero__video">
            <source src="<?php echo $hero['video_url'] ?>" type="video/mp4">
        </video>
        
        <div class="d-sm-block d-none">
            <img src="<?php echo get_stylesheet_directory_uri() . "/img/model-logo-transparent-melon.png" ?>" class="desktop-image">
        </div>

        <div class="d-sm-none d-block mobile-hero-m">
            <img src="<?php echo get_stylesheet_directory_uri() . "/img/model-logo-transparent-melon-m.png" ?>">
        </div>
        
        <div class="hero-logo">
            <img src="<?php echo get_stylesheet_directory_uri() . "/img/model-logo.png" ?>">
        </div>

        <div class="hero-text">
            <img src="<?php echo get_stylesheet_directory_uri() . "/img/rent-for-good.png" ?>" class="d-sm-block d-none">
            <img src="<?php echo get_stylesheet_directory_uri() . "/img/rent-for-good-white.png" ?>" class="d-sm-none d-block">
        </div>


    </div>
    <!-- end model hero video-->

    <div class="row hero-content">
        <div class="col-md-6 offset-md-6">
            <h1 class="h1 text-white fw-800"><?php echo $hero['hero_content']?></h1>
        </div>
    </div>
    
    <a href="#next-section">
        <div class="hero-scroll-button">
            <?php get_template_part( 'template-parts/svg/scroll-button' ); ?>
        </div>
    </a>

</section>
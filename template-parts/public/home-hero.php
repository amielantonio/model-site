<section class="section--home-hero" id="section--home-hero">

    <div class="section--home-hero__object">

        <video loop autoplay muted class="section--home-hero__video">
            <source src="<?php echo get_stylesheet_directory_uri() . "/img/above-the-fold-video.mp4" ?>" type="video/mp4">
        </video>
        
        <div class="d-sm-block d-none">
            <img src="<?php echo get_stylesheet_directory_uri() . "/img/model-logo-transparent-melon.png" ?>">
        </div>

        <div class="d-sm-none d-block">
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
            <h1 class="display-2 text-white fw-800">The new, Australian <br /> purpose-first <br /> build-to-rent group</h1>
        </div>
    </div>
    
    <a href="#next-section">
        <div class="hero-scroll-button">
            <?php get_template_part( 'template-parts/svg/scroll-button' ); ?>
        </div>
    </a>

</section>
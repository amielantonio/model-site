<?php 
$featuredImage = get_the_post_thumbnail_url();

$background = $args['background'] ?? $featuredImage ?? "";
?>

<section class="section--hero bg-cream" id="section--hero" style="<?php echo $background != "" ? "background-image: url({$background});" : "" ?>">
    

    <div class="hero-content">
        <small>About Model</small>
        <h1>Developing Change</h1>
    </div>

   

    <div class="hero-scroll-button">
        <?php get_template_part( 'template-parts/svg/scroll-button' );?>
    </div>

</section>
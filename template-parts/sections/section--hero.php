<?php 
$featuredImage = get_the_post_thumbnail_url();

$background = $args['background'] ?? $featuredImage ?? "";
$title = $args['title'] ?? "";
$subtitle = $args['subtitle'] ?? "";

if( isset($args['noScroll']) ) {
    $noScroll = $args['noScroll'];
} elseif( isset($args['noScroll']) && $args['noScroll'] != "" )  {
    $noScroll = true;
} else {
    $noScroll = false;
}

$haveGradient = isset($args['gradient']) ? $args['gradient'] : false; 

if( $haveGradient) {
    $background = "background: linear-gradient(0deg, rgba(0, 0, 0, 0.60) 0%, rgba(0, 0, 0, 0.60) 100%), url({$featuredImage}), lightgray 50% / cover no-repeat;";
} else {
    $background = "background-image: url({$background});";
}
?>

<section class="section--hero bg-cream position-relative" id="section--hero" style="<?php echo $background != "" ? $background : "" ?>">
    
    <div class="container">
        <div class="row hero-content">
            <div class="col-md-5 col-12 px-sm-1">
                <small class="subtitle"><?php echo $subtitle ?></small>
                <h1 class="title"><?php echo $title?></h1>
            </div>
        </div>
    </div>
    

   
    <?php if( $noScroll ) : ?>
        <a href="#next-section">
            <div class="hero-scroll-button">
                <?php get_template_part( 'template-parts/svg/scroll-button' );?>
            </div>
        </a>
    <?php endif; ?>

</section>
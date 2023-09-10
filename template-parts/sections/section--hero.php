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
?>

<section class="section--hero bg-cream position-relative" id="section--hero" style="<?php echo $background != "" ? "background-image: url({$background});" : "" ?>">
    
    <div class="container">
        <div class="row hero-content">
            <div class="col-12 px-sm-1">
                <small class="subtitle">About Model</small>
                <h1 class="title"><?php echo $title?></h1>
            </div>
        </div>
    </div>
    

   
    <?php if( $noScroll ) : ?>
        <div class="hero-scroll-button">
            <?php get_template_part( 'template-parts/svg/scroll-button' );?>
        </div>
    <?php endif; ?>

</section>
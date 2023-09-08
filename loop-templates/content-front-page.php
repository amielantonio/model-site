<?php 
/**
 * Partial template for content in front-page.php
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' ); 
?>



<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <div class="entry-content">

            <section class="section bg-secondary">
                <div class="<?php echo esc_attr( $container ); ?>">
                    <div class="row bordered-section align-items-center">
                        <div class="col-sm-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/model-logo-sequence.png" alt="model logo animated" class="">
                        </div>

                        <div class="col-sm-9 ps-md-4">
                            <span class="fs-sm--base-xl">
                                <b class="fw-semibold">We are here to dismantle rental norms.</b> <br />
                                To flip the script on old ways of living and being. 
                                We are developing more than just spaces to come home to - 
                                we are cultivating places where there is no compromise between taking care of ourselves, 
                                each other, and the planet. <b class="fw-semibold">This is Model.</b>
                            </span>
                        </div>
                    </div>
                </div>
                
            </section>

            <?php get_template_part( 'template-parts/sections/section--model-video' ) ?>

            <!-- The concept -->
            <?php get_template_part( 'template-parts/sections/section--the-concept' ) ?>

            <!-- Decarbonise Vision -->
            <?php get_template_part( 'template-parts/sections/section--decarbonise-vision' ) ?>

            <!-- call to action -->
            <?php get_template_part( 'template-parts/sections/section--call-to-action' ) ?>

           

           

        </div><!-- .entry-content -->

        <footer class="entry-footer">

            <?php understrap_edit_post_link(); ?>

        </footer><!-- .entry-footer -->

</article>
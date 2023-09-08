<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' ); 

?>
<div class="" id="content" tabindex="-1">

    <div>
        <?php get_template_part('template-parts/sections/section--hero')?>
    </div>

    <div class="row">

        <?php
        // Do the left sidebar check and open div#primary.
        get_template_part( 'global-templates/left-sidebar-check' );
        ?>


        <main class="site-main" id="main">

            <?php
            while ( have_posts() ) {
                the_post();
               

                
            }
            ?>

        </main>

        <?php
        // Do the right sidebar check and close div#primary.
        get_template_part( 'global-templates/right-sidebar-check' );
        ?>

    </div><!-- .row -->

</div><!-- #content -->


<?php 
get_footer();
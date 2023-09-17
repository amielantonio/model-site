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

<div id="content" tabindex="-1" class="">

    <div>
        <?php get_template_part('template-parts/sections/section--hero', '' , [
            'title'     => 'Get in Touch',
            'subtitle'  => 'Contact',
            'noScroll'  => false
        ])?>
    </div>

    <div class="row">
        <?php
        // Do the left sidebar check and open div#primary.
        get_template_part( 'global-templates/left-sidebar-check' );
        ?>

        <main class="site-main" id="main">

           <section class="section--contact">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-3 order-sm-0 order-2 mt-sm-0 mt-6">
                            <div class="">
                                <span class="text-primary fw-bold">Email </span><br />
                                <a href="mailto:hello@themodel.com.au" class="text-primary mt-3 td-none">hello@themodel.com.au</a>
                                <div class="mt-6 d-flex justify-content-start">
                                <?php get_template_part( 'template-parts/public/social-media' ) ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h4 class="">Change begins with a conversation</h4>
                            <p class="content my-5">
                                We’re here for the questions and queries you may have. Please contact us via our email or form below and we will get back to you within 2-3 business days.
                            </p>
                            <?php echo do_shortcode('[wpforms id="39" title="false"]') ?>
                        </div>
                    </div>
            </div>
           </section>

        </main>

        <?php
        // Do the right sidebar check and close div#primary.
        get_template_part( 'global-templates/right-sidebar-check');
        ?>
    </div>
    <!-- end row -->

</div>
<!-- end #content-->

<?php 
get_footer();
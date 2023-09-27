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

           <section class="section--contact" id="thank-you-submission">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-3 order-sm-0 order-2 mt-sm-0 mt-6">
                            <div class="">
                                <span class="text-primary fw-bold">Email </span><br />
                                <a href="mailto:hello@themodel.com.au" class="text-primary mt-3 td-none">hello@themodel.com.au</a>
                                <div class="mt-6 d-flex justify-content-start">
                                <?php get_template_part( 'template-parts/public/social-media' ) ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="">Thank you for taking the first step.</h4>
                            
                            <div class="content my-5 pe-lg-5 lh--md fs--base-md">
                                <p>
                                    We are excited to rethink the art and heart of living alongside like-minded partners and pioneers.
                                </p>

                                <p class="mt-5">
                                    If you haven’t already, be sure to <a href="https://themodel.com.au/wp-content/uploads/2023/09/MODEL_Whitepaper_Concept_Digital-FA.pdf" target="_blank" class="text-dark">download our white paper</a> on decarbonising the future now.
                                </p>

                                <p class="mt-5">
                                    We look forward to speaking soon, 
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-7 fs--base-md">
                                        <img src="<?php echo get_stylesheet_directory_uri() . "/img/rory-hunter-signature.png" ?>" alt="">
                                        <p class="fw-bold border-dark border-top border-1 pt-3 mt-3 mb-0">Rory Hunter</p>
                                        <span class="fw-300">Founder & CEO, Model</span>
                                    </div>
                                </div>
                            </div>
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
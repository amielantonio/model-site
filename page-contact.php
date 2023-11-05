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

$form = get_field( 'contact_form_shortcode', 'option' );
$email = get_field( 'company_email', 'option');
?>

<div class="wrapper py-0" id="page-wrapper">
    <?php get_template_part('template-parts/sections/section--hero', '' , [
        'title'     => 'Get in touch',
        'subtitle'  => 'Contact',
        'noScroll'  => false,
        'gradient'  => true
    ])?>

    <div id="content" tabindex="-1" class="">
        <div class="row">
            <?php
            // Do the left sidebar check and open div#primary.
            get_template_part( 'global-templates/left-sidebar-check' );
            ?>

            <main class="site-main" id="main">

            <section class="section--contact">
                <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-md-4 order-sm-0 order-2 mt-sm-0 mt-6">
                                <div class="">
                                    <span class="text-primary fw-bold">Email </span><br />
                                    <a href="mailto:<?php echo $email ?>" class="text-primary mt-3 td-none"><?php echo $email ?></a>
                                    <div class="mt-6 d-flex justify-content-start">
                                    <?php get_template_part( 'template-parts/public/social-media' ) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-8">
                                <h4 class="">Change begins with a conversation</h4>
                                <div class="content my-5">
                                    <?php the_content() ?>
                                </div>
                                <?php echo do_shortcode( $form ) ?>
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
</div>
<!-- END WRAPPER-->



<?php 
get_footer();
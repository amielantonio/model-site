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

$pillars = get_field('our_pillars');
?>
<div class="wrapper py-0" id="page-wrapper">
    <?php 
    get_template_part('template-parts/sections/section--hero', '' , [
        'title'     => 'A unique approach to placemaking',
        'subtitle'  => 'Concept',
        'gradient'  => true,
        "noScroll"  => true
    ]);
    ?>

    <div id="content" tabindex="-1" class="">
        <div class="row">
            <?php
            // Do the left sidebar check and open div#primary.
            get_template_part( 'global-templates/left-sidebar-check' );
            ?>

            <main class="site-main" id="main">
                
                <section class="section--content bg-cream" id="next-section">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sd-6 pe-sd-7 mt-sd-5">
                                <h4 class="h4-title">
                                    Forget conventions. We’re moving beyond outdated norms and profit-at-all-costs thinking.
                                </h4>

                                <p class="content mt-6 pe-md-7">
                                    Model is the new, Australian purpose-first built-to-rent group and we’re taking a distinct approach to the housing crisis.
                                </p>
                            </div>
                            <!-- end column -->

                            <div class="col-sd-6 col-lg-10 offset-sd-0 offset-lg-2 pe-sd-0 ps-sd-5">
                                <img src="<?php echo get_stylesheet_directory_uri(). "/img/concept-featured.png" ?>" alt="">
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end section-->

                <section class="py-85px">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <h2 class="text-primary h1 fw-800">Our Pillars</h2>
                            </div>
                            <div class="col-sm-8 with-line line-primary">
                                
                            </div>
                        </div>
                    </div>
                </section>

                <?php if( ! empty( $pillars['sections'] ) ) : ?>
                    <?php foreach( $pillars['sections'] as $pillar ) : ?>

                        
                        <?php

                        $list = [];
                        foreach( $pillar['list'] as $l) {
                            $list[] = $l['item'];
                        }

                        $id = sanitize_title($pillar['section_title']);
                        get_template_part('template-parts/sections/section--jumbotron', '', [
                            'title'      => $pillar['section_title'],
                            'background' => $pillar['section_background']['url'],
                            'section-id' => 'concept-'.$id
                        ]); ?>

                        <!-- Section List -->
                        <?php 
                        
                        get_template_part( 'template-parts/sections/section--list', '', [
                            'headline'      => $pillar['section_content']['title'],
                            'background'    => $pillar['content_background'],
                            'content'       => $pillar['section_content']['content'],
                            'list-color'    => $pillar['list_color'],
                            'list'          => $list,
                        ]); ?>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- call to action -->
                <?php get_template_part( 'template-parts/sections/section--call-to-action' ) ?>

            </main>

            <?php
        
            // Do the right sidebar check and close div#primary.
            get_template_part( 'global-templates/right-sidebar-check');
            ?>
        </div>
        <!-- end row -->

    </div>
    <!-- end #content-->

</div><!-- END WRAPPER -->



<?php 
get_footer();
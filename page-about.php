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
        <?php get_template_part('template-parts/sections/section--hero', '' , [
            'title' => 'Developing Change',
            'subtitle' => 'about-model'
        ])?>
    </div>

    <div class="row">

        <?php
        // Do the left sidebar check and open div#primary.
        get_template_part( 'global-templates/left-sidebar-check' );
        ?>


        <main class="site-main" id="main">

            <section class="section--content bg-cream" id="section--content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-5 pe-sm-0 mt-sm-5">
                            <h4 class="h4-title">
                                Model is a build-to-rent development, operations and investment group that's an ally to renters and the planet.
                            </h4>

                            <p class="content">
                                We are here to build more than just structures - <br />
                                we are on a path to decarbonising the built form and creating environments where residents can truly belong.
                            </p>
                            <p class="content">
                                Development done different. <b>That's Model</b>
                            </p>
                        </div>
                        <div class="col-sm-6 offset-sm-1 pe-sm-0 ps-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri(). "/img/about-page-content.png" ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>


            <!-- section melon content -->
            <section class="section--large-content bg-primary" id="section--large-content-primary">
                <div class="container text-white px-sm-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="main-title text-white">Purpose</h2>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-8 offset-sm-3 mt-3 ps-md-4">
                            <p class="headline">
                                To cultivate places where there is no compromise between taking care of ourselves, each other, and the planet.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        
                        <div class="col-sm-6 pe-md-5 d-flex align-items-center">
                            <div class="d-flex align-items-center bordered-content">
                                <div>
                                    <h4 class="mb-md-36px">Model throws out conventional ways of how rentals work.</h4>
                                    <p class="article-content mb-0">
                                        For us, there is an equal importance between craft and community-building, and enduring materials matter just as much as the mental wellbeing of our future residents.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/img/about-purpose-featured.png" ?>" alt="" class="ms-md-3">
                        </div>
                    </div>

                    <div class="row mt-md-8 mt-5">
                        <div class="col-sm-6">
                            <p class="article-content mb-0 pe-md-9">
                                Our rental communities combine the magnetism of the world's most revered cultural hubs, the heartbeat of a home with innovative design, and the urgency to decarbonise our planet through the framework of regenerative development.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="article-content mb-0 ps-md-3 pe-md-6">
                                Model is where the experience of hotel hospitality meets the warmth of family - an enriching and soulful space that feels not just lived in, but alive - creating the environment for renters to feel supported, grounded and empowered with a sense of certainty and security in their living situation.
                            </p>
                        </div>
                    </div>
                    <!-- -end row -->
                </div>
            </section>

            <!-- section melon content -->
            <section class="section--large-content bg-white" id="section--large-content-primary">
                <div class="container text-dark px-sm-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="main-title">Story</h2>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-8 offset-sm-3 mt-3 ps-md-4">
                            <p class="headline">
                                Model began as a question and an intention. We knew we were faced with a climate, housing and mental health crisis in Australia.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        
                        <div class="col-sm-6 pe-md-5 d-flex align-items-center">
                            <div class="d-flex align-items-center bordered-content">
                                <div>
                                    <h4 class="mb-md-36px">We asked ourselves - not if, but how can the built form address all three issues?</h4>
                                    <p class="article-content mb-0">
                                        It spurred the vision to create something better, something worth sharing and something worth acting upon.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/img/about-story-featured-colored.png" ?>" alt="" class="ms-md-3">
                        </div>
                    </div>

                    <div class="row mt-md-8 mt-5">
                        <div class="col-sm-6">
                            <p class="article-content mb-0 pe-md-9">
                                Founded by hotelier, developer, community builder, entrepreneur and World Economic Forum Young Global Leader, Rory Hunter, Model is a visionary project that echoes from existing developments Rory has led.
                            </p>
                            <p class="article-content mb-0 pe-md-9">
                                This includes the development of carbon neutral, mid-rise residences in Australia as well as the ethical luxury resort - Song Saa Private Island, which has amassed a number of awards since opening and is regularly voted as one of the world’s top 10 hotels.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="article-content mb-0 pe-md-9 pe-md-6">
                                Rory was also the founder and CEO of Song Saa Collective (2005-2021), a mission-driven real estate group based in Hong Kong which developed a range of residential and master planned communities, including the 230 hectare Song Saa Reserve - Asia's first Living Community Challenge certified development.
                            </p>
                           
                            <p class="article-content mb-0 ps-md-3 pe-md-6">
                                He is also the founder of The Song Saa Foundation, an independent NGO dedicated to preserving Cambodia’s marine environment while providing jobs, healthcare and education to the Koh Rong Archipelago.
                            </p>
                        </div>
                    </div>
                    <!-- -end row -->
                </div>
            </section>

        </main>

        <?php
        // Do the right sidebar check and close div#primary.
        get_template_part( 'global-templates/right-sidebar-check' );
        ?>

    </div><!-- .row -->

</div><!-- #content -->


<?php 
get_footer();
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
            'title'     => 'Developing Change',
            'subtitle'  => 'About Model',
            'noScroll'  => true
        ])?>
    </div>

    <div class="row">

        <?php
        // Do the left sidebar check and open div#primary.
        get_template_part( 'global-templates/left-sidebar-check' );
        ?>


        <main class="site-main" id="main">

            <section class="section--content bg-cream" id="next-section">
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
                        <div class="col-sm-3">
                            <h2 class="main-title text-white">Purpose</h2>
                        </div>
                        <div class="col-sm-9 with-line line-white"></div>
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
                            <div class="d-flex align-items-center bordered-content border-white pt-sm-0 pt-4 ">
                                <div>
                                    <h4 class="mb-md-36px">Model throws out conventional ways of how rentals work.</h4>
                                    <p class="article-content mb-sm-0 mb-4 mt-sm-0 mt-6 pb-sm-0 pb-4">
                                        For us, there is an equal importance between craft and community-building, and enduring materials matter just as much as the mental wellbeing of our future residents.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-6">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/img/about-purpose-featured.png" ?>" alt="" class="ms-md-3 img-hoverable">
                        </div>
                    </div>

                    <div class="row mt-md-8 mt-5">
                        <div class="col-sm-6">
                            <p class="article-content mb-0 pe-md-9">
                                Our rental communities combine the magnetism of the world's most revered cultural hubs, the heartbeat of a home with innovative design, and the urgency to decarbonise our planet through the framework of regenerative development.
                            </p>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-6">
                            <p class="article-content mb-0 ps-md-3 pe-md-6">
                                Model is where the experience of hotel hospitality meets the warmth of family - an enriching and soulful space that feels not just lived in, but alive - creating the environment for renters to feel supported, grounded and empowered with a sense of certainty and security in their living situation.
                            </p>
                        </div>
                    </div>
                    <!-- -end row -->

                    
                </div>
                <!-- end container -->
            </section>

            <!-- section melon content -->
            <section class="section--large-content bg-white" id="section--large-content-primary">
                <div class="container text-dark px-sm-0">
                    <div class="row">
                        <div class="col-sm-3">
                            <h2 class="main-title">Story</h2>
                        </div>
                        <div class="col-sm-9 with-line line-black"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 offset-sm-3 mt-1 ps-md-4">
                            <p class="headline">
                                Model began as a question and an intention. We knew we were faced with a climate, housing and mental health crisis in Australia.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-6">
                        
                        <div class="col-sm-6 pe-md-5 d-flex align-items-center">
                            <div class="d-flex align-items-center bordered-content white">
                                <div class="pe-md-9">
                                    <h4 class="mb-md-36px mt-sm-0 mt-5">We asked ourselves - not if, but how can the built form address all three issues?</h4>
                                    <p class="headline-body mb-0 mt-sm-0 mt-5 pb-sm-0 pb-5">
                                        It spurred the vision to create something better, something worth sharing and something worth acting upon.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-5">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/img/about-story-featured-colored.png" ?>" alt="" class="ms-md-3 img-hoverable">
                        </div>
                    </div>

                    <div class="row mt-md-90px mt-5">
                        <div class="col-sm-6">
                            <p class="article-content mb-4 pe-md-8">
                                Founded by hotelier, developer, community builder, entrepreneur and World Economic Forum Young Global Leader, Rory Hunter, Model is a visionary project that echoes from existing developments Rory has led.
                            </p>
                            <p class="article-content mb-0 pe-md-9">
                                This includes the development of carbon neutral, mid-rise residences in Australia as well as the ethical luxury resort - Song Saa Private Island, which has amassed a number of awards since opening and is regularly voted as one of the world’s top 10 hotels.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="article-content mb-4 ps-md-3 pe-md-6">
                                Rory was also the founder and CEO of Song Saa Collective (2005-2021), a mission-driven real estate group based in Hong Kong which developed a range of residential and master planned communities, including the 230 hectare Song Saa Reserve - Asia's first Living Community Challenge certified development.
                            </p>
                           
                            <p class="article-content mb-0 ps-md-3 pe-md-6">
                                He is also the founder of The Song Saa Foundation, an independent NGO dedicated to preserving Cambodia’s marine environment while providing jobs, healthcare and education to the Koh Rong Archipelago.
                            </p>
                        </div>
                    </div>
                    <!-- -end row -->

                    <div class="row mt-sm-90px mt-4">
                        <div class="col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/img/about-story-banner.png" ?>" alt="">
                        </div>
                        <div class="col-sm-6">
                            <div class="ps-md-3 pe-md-3">
                                <h3 class="headline mb-md-43px">Making an impact at home</h3>
                                <p class="article-body article-content mb-43px pe-md-3">
                                    Having travelled, lived in and experienced cultures around the world, Rory believes his greatest contribution can be back home in Australia, where the frameworks, policies and institutions have the capacity to amplify ideas and entrepreneurship. For Rory, the next decade is dedicated to addressing long-term challenges including climate action and biodiversity loss, and Model is a distinct example of how we do that. 
                                </p>

                                <p class="article-body article-content mb-36px loew-semibold">
                                   This will be a built form that dismantles the rental norms. 
                                </p>

                                <p class="article-body article-content mb-36px">
                                    One which embodies better equality and quality of life. An environment that enables greater connections with each other and our planet. A home with intelligent, intuitive design that creates secure, connected, carbon neutral communities where health and wellbeing are at the core of the everyday experience.
                                </p>

                                <p class="article-body article-content mb-36px">
                                    Model is a purpose-first developer that’s leading the race to meet our emissions reductions target. One where decarbonisation isn’t a vague vision; it’s a commitment etched into the very foundation of who we are. Model is more than just a structure, it is a shift in redefining how we can and should live. Join us. 
                                </p>

                                <p class="article-body article-content">
                                    To learn more about our founder, Rory, ,<br>
                                    visit his Linkedin profile <a href="#" class="text-dark">here.</a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- end row-->
                </div>
                <!-- end container -->
            </section>


            <section class="section--with-divider mt-3 position-relative">
                <img src="<?php echo get_stylesheet_directory_uri() . "/img/model-section.png" ?>" alt="">
                <div class="centered">
                    <img src="<?php  echo get_stylesheet_directory_uri() . "/img/model-outline-cream.png"?>" alt="">
                </div>
            </section>

            <section class="bg-dark pb-125px">
                <div class="container px-md-0">
                    <div class="row">
                        <div class="col-sm-7 with-line line-white"></div>
                        <div class="col-sm-5 text-end">
                            <h2 class="h1 text-white fw-800">Model Values</h2>
                        </div>
                    </div>

                    <div class="row mt-6">
                        <div class="col-sm-4 ps-md-0 pe-md-3">
                            <figure class="callout text-center">
                                <img src="<?php echo get_stylesheet_directory_uri() . "/img/anti-status-quo.png"?>" alt="">
                                <figcaption class="">
                                    <small class="text-primary">We are</small>
                                    <h3 class="text-white">Anti-status quo</h3>
                                    <p class="text-white">A commitment to do things the right way sets us apart from the rest. We look for ways to break new ground in everything we do, going beyond perceived limitations..</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4">
                            <figure class="callout text-center">
                                <img src="<?php echo get_stylesheet_directory_uri() . "/img/always-accountable.png" ?>" alt="">
                                <figcaption class="">
                                    <small class="text-primary">We are</small>
                                    <h3 class="text-white">Always <br class="d-sm-block d-none" />accountable</h3>
                                    <p class="text-white">Actions drive change, and that’s what we are here to do. We will happily be measured by the impact we make.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 ps-md-3 pe-0">
                            <figure class="callout text-center">
                                <img src="<?php echo get_stylesheet_directory_uri() . "/img/open-and-agile.png" ?>" alt="">
                                <figcaption class="">
                                    <small class="text-primary">We are</small>
                                    <h3 class="text-white">Open and agile</h3>
                                    <p class="text-white">
                                        Open-mindedness has brought us here, agility will keep us ahead. These are the qualities that help us learn, grow, and win together.
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- end row-->

                    <div class="row mt-md-60px">
                        <div class="col-sm-4 offset-sm-2 ps-md-0 pe-md-3">
                            <figure class="callout text-center">
                                <img src="<?php echo get_stylesheet_directory_uri() . "/img/community-mavens.png" ?>" alt="">
                                <figcaption>
                                    <small class="text-primary">We are</small>
                                    <h3 class="text-white">Community<br class="d-sm-block d-none"  /> mavens</h3>
                                    <p class="text-white px-md-43px">Our focus on meaningful connection is powered by experience, empathy and expertise. We foster communities that thrive.</p>
                                </figcaption>
                            </figure>
                            
                        </div>
                        <div class="col-sm-4">
                            <figure class="text-center callout">
                                <img src="<?php echo get_stylesheet_directory_uri() . "/img/proud-placemakers.png" ?>" alt="">
                                <figcaption class="">
                                    <small class="text-primary">We are</small>
                                    <h3 class="text-white">Proud <br class="d-sm-block d-none"  /> Placemakers</h3>
                                    <p class="text-white">Our customers are our sole reason for being, this is something we never forget. With a laser focus on their needs and an obsession over every detail, we create a unique sense of place and homes like no other.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-125px bg-cream d-sm-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2 class="h1 fw-800">Collaborators</h2>
                        </div>
                        <div class="col-sm-6 offset-sm-1 ps-md-4 pt-3">
                            <p class="lh--md">
                                It takes collective effort to make change happen and we're proud to partner with these leaders who are as determined as we are in making a lasting and meaningful impact on the way we live.
                            </p>
                        </div>
                    </div>
                    <!-- end row-->

                    <div class="row mt-6">
                        <div class="d-flex justify-content-between">
                            <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/APHA.png" ?>" alt="">
                            <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/baker-mckenzie.png" ?>" alt="">
                            <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/GBCA.png" ?>" alt="">
                            <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/LFIA.png" ?>" alt="">
                        </div>
                        <div class="d-flex justify-content-between">
                            <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/mustard-creatives.png" ?>" alt="">
                            <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/PCA.png" ?>" alt="">
                            <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/urbis.png" ?>" alt="">
                            <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/vorhaben.png" ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <!-- call to action -->
            <?php get_template_part( 'template-parts/sections/section--call-to-action' ) ?>

        </main>

        <?php
        // Do the right sidebar check and close div#primary.
        get_template_part( 'global-templates/right-sidebar-check' );
        ?>

    </div><!-- .row -->

</div><!-- #content -->


<?php 
get_footer();
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

$rfg = get_field('rent_for_good');
$purpose = get_field('purpose');
$story = get_field('story');
$s2p = get_field( 'story_2nd_paragraph' );
?>
<div class="wrapper py-0" id="page-wrapper">
    <!-- Header -->
    <?php 
    get_template_part('template-parts/sections/section--hero', '' , [
        'title'         => 'Developing change',
        'subtitle'      => 'About Model',
        'noScroll'      => true,
        'gradient'      => true,
        'class'  => 'about'
    ])
    ?>

<div class="" id="content" tabindex="-1">
    <div class="row">

        <?php
        // Do the left sidebar check and open div#primary.
        get_template_part( 'global-templates/left-sidebar-check' );
        ?>


        <main class="site-main" id="main">

            <section class="section--content bg-cream" id="next-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sd-5 pe-sd-0 mt-sm-5">
                            <h4 class="h4-title">
                                <?php echo $rfg['section_title']?>
                            </h4>

                            <?php if( ! empty( $rfg['section_content'] ) ) : ?>
                                <?php foreach( $rfg['section_content'] as $content ) : ?>
                                    <p class="content">
                                       <?php echo $content['content'] ?>
                                    </p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-sd-6 col-lg-10 offset-sd-1 offset-lg-2 pe-sd-0 ps-sd-4">
                            <img src="<?php echo get_stylesheet_directory_uri(). "/img/about-page-content.png" ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>


            <!-- section melon content -->
            <section class="section--large-content bg-primary" id="section--large-content-primary">
                <div class="container text-white px-sm-0">
                    <div class="row">
                        <div class="col-sd-3">
                            <h2 class="main-title text-white">Purpose</h2>
                        </div>
                        <div class="col-sd-9 with-line line-white"></div>
                    </div>
                    <div class="row">
                        <div class="col-sd-8 offset-sd-3 mt-3 ps-sd-4 pt-sd-0 pt-5">
                            <p class="headline">
                                <?php echo $purpose['featured_paragraph'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        
                        <div class="col-lg-6 pe-md-5 d-flex align-items-center">
                            <div class="d-flex align-items-center bordered-content border-white pt-lg-0 pt-4  =pb-lg-0 pb-4">
                                <div>
                                    <h4 class="h4 mb-md-36px mt-xl-0 mt-4"><?php echo $purpose['paragraph_1_title'] ?></h4>
                                    <p class="article-content fs--base-lg mb-sm-0 mb-4 mt-sm-0 mt-6 pb-sm-0 pb-4">
                                        <?php echo $purpose['paragraph_1'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-lg-0 mt-6">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/img/about-purpose-featured.png" ?>" alt="" class="ms-lg-3 img-hovesrable img-fluid">
                        </div>
                    </div>

                    <div class="row mt-md-8 mt-5">
                        <div class="col-lg-6">
                            <p class="article-content mb-0 pe-md-9">
                                <?php echo $purpose['left_paragraph'] ?>
                            </p>
                        </div>
                        <div class="col-lg-6 mt-lg-0 mt-6">
                            <p class="article-content mb-0 ps-lg-3 pe-lg-6">
                                <?php echo $purpose['right_paragraph'] ?>
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
                        <div class="col-lg-3">
                            <h2 class="main-title">Story</h2>
                        </div>
                        <div class="col-lg-9 with-line line-black"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-3 mt-lg-1 mt-5 ps-lg-4">
                            <p class="headline">
                                <?php echo $story['featured_paragraph'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-6">
                        
                        <div class="col-lg-6 pe-lg-5 d-flex align-items-center">
                            <div class="d-flex align-items-center bordered-content white">
                                <div class="pe-lg-9">
                                    <h4 class="h4 mb-md-36px mt-lg-0 mt-5"><?php echo $story['paragraph_1_title'] ?></h4>
                                    <p class="headline-body mb-0 mt-lg-0 mt-5 pb-lg-0 pb-5">
                                        <?php echo $story['paragraph_1'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-lg-0 mt-5">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/img/about-story-featured-colored.png" ?>" alt="" class="ms-lg-3 saturates">
                        </div>
                    </div>

                    <div class="row mt-md-90px mt-5">
                        <div class="col-lg-6">
                            <?php if( ! empty($story['left_paragraph']) ) :  ?>
                                <?php $x = 0; foreach( $story['left_paragraph'] as $p ) : ?>
                                    <?php if( $x == 0  ) : ?>
                                        <p class="article-content mb-4 pe-lg-8">
                                            <?php echo $p['content'] ?>
                                        </p>
                                    <?php else : ?>
                                        <p class="article-content mb-0 pe-lg-9 mt-lg-0 mt-5">
                                            <?php echo $p['content']?>
                                        </p>
                                    <?php endif; ?>
                                <?php $x++; endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6">
                            <?php if( ! empty($story['left_paragraph']) ) :  ?>
                                <?php $x = 0; foreach( $story['right_paragraph'] as $p ) : ?>
                                    <?php if( $x == 0  ) : ?>
                                        <p class="article-content mb-4 ps-lg-3 pe-lg-6 mt-lg-0 mt-5">
                                            <?php echo $p['content'] ?>
                                        </p>
                                    <?php else : ?>
                                        <p class="article-content mb-0 ps-lg-3 pe-lg-6 mt-lg-0 mt-5">
                                            <?php echo $p['content']?>
                                        </p>
                                    <?php endif; ?>
                                <?php $x++; endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- -end row -->

                    <div class="row mt-sm-90px mt-4">
                        <div class="col-lg-6">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/img/about-story-banner.png" ?>" alt="">
                        </div>
                        <div class="col-lg-6 mt-lg-0 mt-5">
                            <div class="ps-lg-3 pe-lg-3">
                                <h3 class="headline mb-md-43px"><?php echo $s2p['section_title']?></h3>
                                <?php if( ! empty( $s2p['pargraphs'] ) ) : ?>
                                    <?php $x = 0; foreach( $s2p['pargraphs'] as $p ) : ?>
                                        <?php if( $x == 0 ) :  ?>
                                            <p class="article-body article-content mb-43px pe-md-3">
                                                <?php echo $p['content'] ?>
                                            </p>
                                        <?php else : ?>
                                            <p class="article-body article-content <?php echo ($p['margin_bottom']) ? "mb-36px" : ""; ?>  <?php echo ($p['semibold']) ? "loew-semibold" : ""; ?>">
                                                <?php echo $p['content'] ?>
                                            </p>
                                        <?php endif; ?>
                                    <?php $x++; endforeach;?>
                                <?php endif;?>
                                <!-- <p class="article-body article-content mb-36px loew-semibold">
                                    This will be a built form that dismantles the rental norms. 
                                </p>

                                <p class="article-body article-content mb-36px">
                                    One which embodies better equality and quality of life. An environment that enables greater connections with each other and our planet. A home with intelligent, intuitive design that creates secure, connected, carbon neutral communities where health and wellbeing are at the core of the everyday experience.
                                </p>

                                <p class="article-body article-content mb-36px">
                                    Model is a purpose-first developer that’s leading the race to meet our emissions reductions target. One where decarbonisation isn’t a vague vision; it’s a commitment etched into the very foundation of who we are. Model is more than just a structure, it is a shift in redefining how we can and should live.
                                </p>

                                <p class="article-body article-content">
                                    To learn more about our founder, Rory ,<br>
                                    visit his Linkedin profile <a href="https://www.linkedin.com/in/rory-hunter-melbourne/" target="_blank" class="text-dark">here.</a>
                                </p> -->

                            </div>
                        </div>
                    </div>
                    <!-- end row-->
                </div>
                <!-- end container -->
            </section>


            <section class="section--with-divider mt-3 position-relative">
                <img src="<?php echo get_stylesheet_directory_uri() . "/img/black-divider.png" ?>" alt="">
                <div class="centered">
                    <img src="<?php  echo get_stylesheet_directory_uri() . "/img/model-outline-cream.png"?>" alt="">
                </div>
            </section>

            <section class="bg-dark pb-125px">
                <div class="container px-md-0">
                    <div class="row">
                        <div class="col-lg-7 with-line line-white order-lg-0 order-1"></div>
                        <div class="col-lg-5 text-lg-end mt-lg-0 mt-5">
                            <h2 class="h1 text-white fw-800">Model Values</h2>
                        </div>
                    </div>

                    <div class="row mt-6">
                        <div class="col-sd-4 col-8 offset-sd-0 offset-2 ps-md-0 pe-md-3">
                            <figure class="callout text-center">
                                <img src="<?php echo get_stylesheet_directory_uri() . "/img/anti-status-quo.png"?>" alt="">
                                <figcaption class="">
                                    <small class="text-primary">We are</small>
                                    <h3 class="text-white">Anti-status quo</h3>
                                    <p class="text-white">A commitment to do things the right way sets us apart from the rest. We look for ways to break new ground in everything we do, going beyond perceived limitations..</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sd-4 col-8 offset-sd-0 offset-2">
                            <figure class="callout text-center">
                                <img src="<?php echo get_stylesheet_directory_uri() . "/img/always-accountable.png" ?>" alt="">
                                <figcaption class="">
                                    <small class="text-primary">We are</small>
                                    <h3 class="text-white">Always <br class="d-sd-block d-none" />accountable</h3>
                                    <p class="text-white">Actions drive change, and that’s what we are here to do. We will happily be measured by the impact we make.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sd-4 col-8 offset-sd-0 offset-2 ps-md-3 pe-0">
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
                        <div class="col-sd-4 col-8 offset-2 ps-md-0 pe-md-3">
                            <figure class="callout text-center">
                                <img src="<?php echo get_stylesheet_directory_uri() . "/img/community-mavens.png" ?>" alt="">
                                <figcaption>
                                    <small class="text-primary">We are</small>
                                    <h3 class="text-white">Community<br class="d-sd-block d-none"  /> mavens</h3>
                                    <p class="text-white px-md-43px">Our focus on meaningful connection is powered by experience, empathy and expertise. We foster communities that thrive.</p>
                                </figcaption>
                            </figure>
                            
                        </div>
                        <div class="col-sd-4 col-8 offset-sd-0 offset-2">
                            <figure class="text-center callout">
                                <img src="<?php echo get_stylesheet_directory_uri() . "/img/proud-placemakers.png" ?>" alt="">
                                <figcaption class="">
                                    <small class="text-primary">We are</small>
                                    <h3 class="text-white">Proud <br class="d-sd-block d-none"  /> Placemakers</h3>
                                    <p class="text-white">Our residents are our reason for being, this is something we never forget. With a laser focus on their needs and an obsession over every detail, we create a unique sense of place and homes like no other.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-125px bg-cream d-sm-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2 class="h1 fw-800">Collaborators</h2>
                        </div>
                        <div class="col-lg-6 offset-lg-1 ps-md-4 pt-3">
                            <p class="lh--md">
                                It takes collective effort to make change happen and we're proud to partner with these leaders who are as determined as we are in making a lasting and meaningful impact on the way we live.
                            </p>
                        </div>
                    </div>
                    <!-- end row-->

                    <div class="row mt-6">
                        <div class="d-flex justify-sm-content-between justify-content-around flex-wrap">

                            <a href="https://www.passivhausassociation.com.au/" target="_blank">
                                <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/APHA.png" ?>" alt="">
                            </a>
                            <a href="https://www.bakermckenzie.com/en/" target="_blank">
                                <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/baker-mckenzie.png" ?>" alt="">
                            </a>
                            <a href="https://new.gbca.org.au/" target="_blank">
                                <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/GBCA.png" ?>" alt="">
                            </a>
                            <a href="https://living-future.org.au/" target="_blank">
                                <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/LFIA.png" ?>" alt="">
                            </a>
                            <a href="https://www.mustardcreative.com.au/" target="_blank">
                                <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/mustard-creatives.png" ?>" alt="">
                            </a>
                            <a href="https://www.propertycouncil.com.au/" target="_blank">
                                <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/PCA.png" ?>" alt="">
                            </a>
                            <a href="https://urbis.com.au/" target="_blank">
                                <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/urbis.png" ?>" alt="">
                            </a>
                            <!-- <img class="img-black-hoverable" src="<?php #echo get_stylesheet_directory_uri() . "/img/collaborators/vorhaben.png" ?>" alt=""> -->
                            <a href="https://fathomgroup.com.au/" target="_blank">
                                <img class="img-black-hoverable" src="<?php echo get_stylesheet_directory_uri() . "/img/collaborators/fathom.png" ?>" alt="">
                            </a>

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

</div>
<!-- END WRAPPER -->



<?php 
get_footer();
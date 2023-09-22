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
<div class="wrapper" id="page-wrapper">
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

                <?php 
                $background = get_stylesheet_directory_uri() . "/img/climate-action.png";

                get_template_part('template-parts/sections/section--jumbotron', '', [
                    'title'      => 'Climate Action',
                    'background' => $background,
                    'section-id' => 'concept-climate-action'
                ]); ?>

                <!-- Section List -->
                <?php 
                
                get_template_part( 'template-parts/sections/section--list', '', [
                    'headline'      => 'Our focus goes beyond sustainability. ',
                    'background'    => '',
                    'content'       => 'We are not attempting to maintain what works, we are here to improve what doesn’t through the framework of regenerative development.  We do this using a holistic, systems-based approach that ensures the social and economic ecosystems where we operate are better off with us being there. Our path is one towards decarbonisation and restoration of biodiversity loss, which means our developments include:',
                    'list-color'    => 'teal',
                    'list'          => [
                        'Minimum 40% reduction in embodied carbon in every project from day one',
                        'A target for carbon positive developments with carbon neutrality as the bare minimum',
                        'Restoration of local biodiversity loss',
                        'Sustainable and ethical funding',
                        '6 Star Green Star rating',
                        '6 Star NABERS',
                        '10 Star NatHERS',
                        'Energy from electric sources and 100% powered by renewables',
                        'Living Building Challenge Certification, the topmost international rating'
                    ]
                ]); ?>

                <?php 
                $background = get_stylesheet_directory_uri() . "/img/community-building.png";

                get_template_part('template-parts/sections/section--jumbotron', '', [
                    'title'      => 'Community Building',
                    'background' => $background,
                    'section-id' => 'concept-community-building'
                ]); ?>


                <!-- Section List -->
                <?php 
                
                get_template_part( 'template-parts/sections/section--list', '', [
                    'headline'      => 'Home should be a place where you feel like you truly belong, and that belonging, for us, extends beyond four walls. ',
                    'background'    => 'bg-cream',
                    'content'       => 'Model creates the conditions for renters to be part of a community. Conditions that foster kindness, connection, safety, social cohesion and equity. Here’s how:',
                    'list-color'    => 'blue',
                    'list'          => [
                        'Built on values that attract like minded people gearing for change',
                        'Offering generous shared spaces for gathering and happenstance',
                        'A sense of certainty and security within their living situation',
                        'Platforms where people can get involved in various causes',
                        'Technology that enables community to engage and help one another',
                        'High levels of seamless service that exudes thoughtfulness',
                        'A minimum of 10% affordable and key worker housing in each project',
                    ]
                ]); ?>


                <?php 
                $background = get_stylesheet_directory_uri() . "/img/design-innovation.png";

                get_template_part('template-parts/sections/section--jumbotron', '', [
                    'title'      => 'Design Innovation',
                    'background' => $background,
                    'section-id' => 'concept-design-innovation'
                ]); ?>

                <!-- Section List -->
                <?php 
                
                get_template_part( 'template-parts/sections/section--list', '', [
                    'headline'      => 'We view each space as a blank canvas in which we introduce thoughtful, intuitive design that inspires wellbeing, health and happiness.',
                    'background'    => 'bg-white',
                    'content'       => 'To do this, we pay close attention to the details. We focus on truly understanding the needs and the wants of our residents, ensuring we evoke a feeling of comfort, joy and restfulness in the place they call home.',
                    'list-color'    => 'melon',
                    'list'          => [
                        'Global design exemplars with a deep sense of place',
                        'Passive House design principles embraced on all projects',
                        'High functioning and built to last',
                        'Focus on the health and well being of our residents in the design stage',
                        'Thoughtful design that reflects the way residents work, live and move',
                        'Work From Home (WFH) and wellness spaces to support modern lifestyles',
                        'Local nuancing to celebrate neighbourhood characteristics',
                        'Curating a magnetic and sensorial atmosphere',
                        'Reconnecting people with nature in urban environments'
                    ]
                ]); ?>


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
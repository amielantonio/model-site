<section class="section--concept" id="section--concept">
    <div class="container">
        <div class="row position-relative">

            <div class="content-container bg-cream content">
                <div class="row">
                    <div class="col-sm-10">
                        <h2 class="h1 bd--b-primary pb-36px fw-800 text-danger">The <br /> Concept</h2>

                        <p class="fs--base-lg fw-light mt-60px lh--md">
                            Climate action, community building,  and design innovation with a focus on mental wellbeing - these are the pillars upon which Model is built. They set the foundation for everything we do and are the threads that weave through each decision we make.
                        </p>

                        <a href="" type="button" class="btn btn-outline-melon mt-3">Learn More <?php get_template_part( 'template-parts/svg/arrow' ) ?></a>
                    </div>
                </div>
                <!-- end content container-->


                <div class="img-concept">
                    <div class="outline">
                        <img src="<?php echo get_stylesheet_directory_uri() . "/img/model-pillars-outline.png"  ?>" alt="">
                    </div>
                    <div class="fill josh-js" 
                        data-josh-anim-name="fadeInUp"
                        data-josh-duration="1000ms">
                        <img src="<?php echo get_stylesheet_directory_uri() . "/img/model-pillars-fill.png"  ?>" alt="">
                    </div>
                </div>
                
            </div>
        </div>
        <!-- end row-->


        <div class="row vertical-link-container">
            <div class="content-container bg-cream position-relative content-container-bottom">
                <div class="vertical-link d-flex mb-4">
                    <a href="#" class="">THE CONCEPT</a>
                </div>
            </div>

            <div class="vertical-links mb-4">
                <div class="vertical-link-lg vl-1">
                    <a class=" josh-js"
                        data-josh-anim-name="fadeInLeft"
                        data-josh-duration="1000ms"
                        href="<?php echo site_url('concept'). "#concept-climate-action" ?>">
                        CLIMATE ACTION</a>
                </div>
                <div class="vertical-link-lg vl-2">
                    <a class="josh-js"
                        data-josh-anim-name="fadeInLeft"
                        data-josh-duration="1000ms"
                        href="<?php echo site_url('concept'). "#concept-community-building" ?>">COMMUNITY BUILDING</a>
                </div>
                <div class="vertical-link-lg vl-3">
                    <a class="josh-js" 
                        data-josh-anim-name="fadeInLeft"
                        data-josh-duration="1000ms"
                        href="<?php echo site_url('concept'). "#concept-design-innovation" ?>">DESIGN INNOVATION </a>
                </div>
            </div>

        </div>


    </div>
    <!-- end container-->
    
</section>
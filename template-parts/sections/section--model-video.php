<section class="section--home-video-cta position-relative">

        <video loop autoplay muted preload>
            <source src="https://themodel.com.au/wp-content/uploads/2023/09/model_background.mp4" type="video/mp4">
        </video>


    <div class="img-absolute-center">
        <img src="<?php echo get_stylesheet_directory_uri() . "/img/model-vertical.png" ?>">
    </div>

    <div class="rb-container">
        <div class="rotating-button">
            <a data-bs-target="#vimeo-link" data-bs-toggle="modal" class="d-block">
                <?php get_template_part('template-parts/svg/rotating-button')?>
            </a>
        </div>
    </div>
    

    
</section>

<div class="modal fade" tabindex="-1" id="vimeo-link" data-bs-keyboard="false" aria-labelledby="vimeo-link-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Watch The Model Brand Vision</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php 
                
                $video = get_field( 'model_brand_vision_video', 'option');
                ?>
                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="<?php echo $video ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="MODEL Long Web Version_NoURL"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
            </div>
            <!-- end modal body -->
        </div>
        <!-- end modal content -->
    </div>
    <!-- end modal dialog -->
</div>
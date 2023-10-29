<?php 

 $content = get_field('decarbonise_now');
 $vision = get_field('vision');
?>
<!-- DECARBONISE -->
<section class="section--decarbonise" id="section--decarbonsie">
    <video loop autoplay muted preload>
        <source src="<?php echo get_stylesheet_directory_uri() . "/img/decarbonise.mp4" ?>" type="video/mp4">
    </video>
    
    <div class="container content mt-md-15">
        <div class="row">
            <div class="col-lg-4 offset-lg-1 col-md-6">
                <h2 class="h1 text-white fw-700">
                   <?php echo $content['section_title'] ?>
                </h2>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6 text-white fs--base-lg">
                <p class="mb-6 fw-300 lh--md fs--sm-base-lg fs--base-md">
                    <?php echo $content['section_subtitle'] ?>
                </p>

                <?php if( !empty( $content['section_paragraph'] ) ) :?>
                    <?php foreach( $content['section_paragraph'] as $p ) : ?>
                        <p class="fw-300 lh--md fs-sm--base-md fs--base-list">
                            <?php echo $p['content'] ?>
                        </p>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="mt-6">
                    <a href="https://themodel.com.au/wp-content/uploads/2023/10/MODEL_Tomorrow-its-too-late_Whitepaper_October-2023.pdf" target="_blank" class="btn btn-outline-melon">Download our white paper <?php get_template_part( 'template-parts/svg/arrow' )?></a>
                </div>
            </div>
        </div>
    </div>
 

    <div class="floating-title-container d-none d-lg-block">
        <div class="floating-title">
            <span class="text-primary">DECARBONISATION</span>
        </div>
    </div>
    

</section>

<section class="section--vision" id="section--vision">

    <!-- floating title -->
    <div class="floating-title-container d-none d-lg-block" style="margin-top: -8%">
        <div class="floating-title">
            <span class="text-white">VISION</span>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8 offset-sd-4 p-sd-4">
            <h2 class="section-title text-white mb-4 mb-md-6"><?php echo $vision['section_title'] ?></h2>
            <p class="section-subtitle text-white mb-4 mb-md-6"><?php echo $vision['section_subtitle'] ?></p>
            <p class="fs--base-lg text-white mb-4 mb-md-6 fw-300 lh--md"><?php echo $vision['section_paragraph']?></p>

            <div>
                <a href="<?php echo $vision['button_link'] ?>" class="btn btn-outline-light"><?php echo $vision['button_text']?> <?php get_template_part( 'template-parts/svg/arrow' )?></a>
            </div>
        </div>
    </div>
    
</section>
<?php 
    $headline = $args['headline'];
    $content = $args['content'];
    $background = $args['background'];
    $list = $args['list'];
    $listColor = $args['list-color'];
?>
<section class="section section--list <?php echo $background?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 position-relative">
                <div class="sticky-content">
                    <h4><?php echo $headline ?></h4>
                    <p>
                        <?php echo $content; ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-1">
                <ul class="content-list ">
                    <?php foreach( $list as $item ) : ?>
                        <li class="content-list__item <?php echo $listColor ?>"><?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
                
            </div>
        </div>
    </div>
</section>
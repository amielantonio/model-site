<?php


$title = $args['title'] ?? "";
$background = $args['background'];
?>
<section class="section--jumbotron" style="<?php echo "background-image: url({$background})" ?>">
    <div class="container">
        <div class="row position-absolute">
            <div class="col-12">
                <h2 class="text-white"><?php echo $title ?></h2>
            </div>
            
        </div>
    </div>
</section>
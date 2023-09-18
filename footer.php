<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="site-footer py-sm-9 py-60px" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?> px-sm-0">

		<div class="row">

			<div class="col-md-3">

				<!-- Desktop Image -->
				<div class="d-sm-block d-none">
					<img src="<?php echo get_stylesheet_directory_uri() . "/img/model-outline-vertical.png"?>" alt="">
				</div>

				<!-- MObile Image -->
				<div class="d-sm-none d-block">
					<img src="<?php echo get_stylesheet_directory_uri() . "/img/model-logo-footer.png"?>" alt="">
				</div>
				

			</div><!-- col -->

			<div class="col-md-9">
				<div class="row">
					<div class="col-sm-5 fs--base-sm pe-md-7">
						
						<div class="mt-sm-3 mt-5">
							<p class="text-primary lh--md">
								Model acknowledges the Traditional Owners of Country throughout Australia. We pay our respects to Elders past and present.
							</p>
						</div>

						<div class="mt-md-9 mt-5">
							<span class="text-primary fw-bold">Email </span>
							<a href="mailto:" class="text-primary mt-3">hello@themodel.com.au</a>
						</div>

						<div class="mt-md-6 mt-5">
							<span class="text-primary fw-bold">Decarbonisation white paper</span><br>
							<a href="" class="text-primary d-block pt-2">Download our white paper</a>
						</div>

					</div>
					<!-- -END COL -->

					<div class="col-sm-5 px-md-5">
						<?php 
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container_class' => 'footer-main-menu-container',
									'container_id'    => '',
									'menu_class'      => 'navbar-nav',
									'fallback_cb'     => '',
									'menu_id'         => 'footer-main-menu',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							);
						?>
					</div>
					<!-- END COL -->

					<div class="col-sm-2 mt-sm-3 mt-5 mb-sm-0 mb-5">
						<?php get_template_part( 'template-parts/public/social-media' ) ?>
					</div>
					<!-- END COL-->
				</div>

				<div class="row mt-md-10">
				<div class="col-12">
						<div id="colophon">
							<nav class="d-sm-block d-flex flex-column">
								<a href="#" class="text-primary fs--base-xs td-none me-sm-7 mb-sm-0 mb-4">Terms of Use</a>

								<a href="#" class="text-primary fs--base-xs td-none me-sm-7 mb-4">Privacy</a>

								<span class="fs--base-xs text-primary">Copyright 2023 &copy; Model Australia Pty Ltd.</span>
							</nav>
						</div>
					</div>
				</div>
				<!-- end row -->
			</div>

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</footer><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>


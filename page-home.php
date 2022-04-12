<?php
/*
	Template Name: Home Page
*/

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Freelancer_C2W
 */

get_header();
/* these variables are used to fetch data like custom logo etc dynamically */
$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');

/* these variables are used to fetch data for about section dynamically */
$about_section_left = get_field('about_text_left');
$about_section_right = get_field('about_text_right');
$about_button_text = get_field('button_text');
$about_button_link = get_field('button_field_link');
?>


<!-- Header -->
<header class="masthead bg-primary text-white text-center">
	<div class="container">
		<img class="img-fluid mb-5 d-block mx-auto" src="<?php echo $image[0] ?>" alt="">
		<h1 class="text-uppercase mb-0"><?php bloginfo('name') ?></h1>
		<hr class="star-light">
		<h2 class="font-weight-light mb-0"><?php bloginfo('description') ?></h2>
	</div>
</header>

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
	<div class="container">
		<h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
		<hr class="star-dark mb-5">
		<div class="row">
			<?php $loop = new WP_Query(array('post_type' => 'portfolios', 'order_by' =>
			'post_id', 'order' => 'ASC')) ?>
			<?php while ($loop->have_posts()) :
				$loop->the_post();
			?>
				<div class="col-md-6 col-lg-4">
					<a class="portfolio-item d-block mx-auto" href="#portfolio-modal-<?php the_ID(); ?>">
						<div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
							<div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
								<i class="fa fa-search-plus fa-3x"></i>
							</div>
						</div>
						<!--<img class="img-fluid" src="" alt="">-->
						<?php the_post_thumbnail() ?>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
	<div class="container">
		<h2 class="text-center text-uppercase text-white">About</h2>
		<hr class="star-light mb-5">
		<div class="row">
			<div class="col-lg-4 ml-auto">
				<p class="lead"><?php echo $about_section_left ?></p>
			</div>
			<div class="col-lg-4 mr-auto">
				<p class="lead"><?php echo $about_section_right ?></p>
			</div>
		</div>
		<div class="text-center mt-4">
			<a class="btn btn-xl btn-outline-light" href="<?php echo $about_button_link ?>">
				<i class="fa fa-download mr-2">&nbsp;<?php echo $about_button_text ?></i>
			</a>
		</div>
	</div>
</section>

<!-- Contact Section -->
<section id="contact">
	<div class="container">
		<h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
		<hr class="star-dark mb-5">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
				<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
				<?php echo do_shortcode('[contact-form-7 id="50" title="Freelancer Form"]') ?>
			</div>
		</div>
	</div>
</section>

<?php
get_sidebar();
get_footer();

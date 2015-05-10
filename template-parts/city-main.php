<?php
/**
 * The template used for displaying page content in front.php
 *
 * @package TOT
 */
?>

<section id="city_main" style="background: url(<?php the_field('city_background'); ?>) center center; background-size: cover;">

	<div class="city_content">

		<div class="container">
			
			<div class="row animated fadeIn" style="margin-bottom: 50px;">
				<img class="city_link_img" src="<?php the_field('city_link_img_1'); ?>" />
				<div class="city_link_title">
					<a href="<?php the_field('img_1_url'); ?>"><h2><?php the_field('city_link_year_1'); ?></h2></a>
				</div>
			</div>

			<div class="row animated fadeIn">
				<img class="city_link_img" src="<?php the_field('city_link_img_2'); ?>" />
				<div class="city_link_title">
					<a href="<?php the_field('img_2_url'); ?>"><h2><?php the_field('city_link_year_2'); ?></h2></a>
				</div>
			</div>


		</div>
			
	</div>
<?php the_field('URL'); ?>
</section>
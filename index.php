<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evelina-thoren
 */

get_header();
?>
	<style>.cell{background-color: lightblue; color: white; padding: 20px; border:1px solid white;}</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
		<div class="grid-x">
			<div class="cell">full width cell</div>
			<div class="cell">full width cell</div>
		</div>
		<div class="grid-x">
		<div class="cell small-6">6 cells</div>
		<div class="cell small-6">6 cells</div>
		</div>
		<div class="grid-x">
		<div class="cell medium-6 large-4">12/6/4 cells</div>
		<div class="cell medium-6 large-8">12/6/8 cells</div>
		</div>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					<h2>THIS IS THE SUBTITLE</h2>
				</header>
				<?php
			endif;
			
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				
				/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
				get_template_part( 'template-parts/content', get_post_type() );
				echo 'this is index';

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

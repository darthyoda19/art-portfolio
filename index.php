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
			<div class="cell medium-4">
				<img src="http://placehold.it/100" alt="logo">
				<h1>This is the Sidebar</h1>
				<ul class="vertical menu">
					<li><a href="#">Page 1</a></li>
					<li><a href="#">Page 2</a></li>
					<li><a href="#">Page 3</a></li>
					<li><a href="#">Page 4</a></li>
					<li><a href="#">Page 5</a></li>
				</ul>
			</div>
			<div class="cell medium-8">
				<div class="grid-x">
					<div class="cell medium-6 large-4">
						<a href="#" class="thumbnail"><img src="http://placehold.it/300" alt="thumbnail"></a>
					</div>
					<div class="cell medium-6 large-4">
						<a href="#" class="thumbnail"><img src="http://placehold.it/300x600" alt="thumbnail"></a>
					</div>
					<div class="cell medium-6 large-4">
						<a href="#" class="thumbnail"><img src="http://placehold.it/300" alt="thumbnail"></a>
					</div>
					<div class="cell medium-6 large-4">
						<a href="#" class="thumbnail"><img src="http://placehold.it/300" alt="thumbnail"></a>
					</div>
					<div class="cell medium-6 large-4">
						<a href="#" class="thumbnail"><img src="http://placehold.it/300" alt="thumbnail"></a>
					</div>
					<div class="cell medium-6 large-4">
						<a href="#" class="thumbnail"><img src="http://placehold.it/300" alt="thumbnail"></a>
					</div>
					<div class="cell medium-6 large-4">
						<a href="#" class="thumbnail"><img src="http://placehold.it/300" alt="thumbnail"></a>
					</div>
					<div class="cell medium-6 large-4">
						<a href="#" class="thumbnail"><img src="http://placehold.it/300" alt="thumbnail"></a>
					</div>
				</div>
			</div>
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

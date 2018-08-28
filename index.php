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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
		<div class="site-content grid-x">
			<!-- # start header -->
			<!-- <div class="header cell small-12">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="http://placehold.it/1440x600" alt="header">
				</a>
			</div> -->
			<!-- # end header -->
			<!-- # start sidebar -->
			<div class="widget-area cell small-6 medium-4">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="logo__site" src="<?php echo get_template_directory_uri(); ?>/images/ev-logo.jpg" alt="logo">
			</a>
			<nav id="pages-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'evelina-thoren' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu'        => 'Menu 1',
						'menu_class' => 'vertical menu primary',
						'container' => 'ul'
						) );
						?>
				</nav><!-- #pages-navigation -->
				<nav id="categories-navigation">
					<button class="menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e( 'Secondary Menu', 'evelina-thoren' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu'        => 'Menu 2',
						'menu_class' => 'vertical menu secondary',
						'container' => 'ul'
						) );
						?>
				</nav><!-- #categories-navigation -->
			</div>
			<style>
				.grid {
					width: 100%;
				}
				.grid-item {
					/* width: 33.3333%; */
					/* height: 120px; */
					float: left;
					background: #D26;
					border: 3px solid #D26;
				}

				.grid-item--width2 { width:  320px; }
				.grid-item--width3 { width:  480px; }
				.grid-item--width4 { width:  720px; }

				.grid-item--height2 { height: 200px; }
				.grid-item--height3 { height: 260px; }
				.grid-item--height4 { height: 360px; }
			</style>
			<!-- # end sidebar -->
			<div class="main cell small-6 medium-8">
				<div class="grid grid-x" data-masonry='{ "itemSelector": ".grid-item" }'>
					<div class="grid-item cell small-12 medium-6 large-4">
						<a href="#"><img src="http://placehold.it/600" class="img-responsive" alt="thumbnail"></a>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4">
						<a href="#"><img src="http://placehold.it/600x1000" class="img-responsive" alt="thumbnail"></a>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4">
						<a href="#"><img src="http://placehold.it/600" class="img-responsive" alt="thumbnail"></a>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4">
						<a href="#"><img src="http://placehold.it/600" class="img-responsive" alt="thumbnail"></a>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4">
						<a href="#"><img src="http://placehold.it/600" class="img-responsive" alt="thumbnail"></a>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4">
						<a href="#"><img src="http://placehold.it/600" class="img-responsive" alt="thumbnail"></a>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4">
						<a href="#"><img src="http://placehold.it/600" class="img-responsive" alt="thumbnail"></a>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4">
						<a href="#"><img src="http://placehold.it/600" class="img-responsive" alt="thumbnail"></a>
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
		<aside>
		</aside>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

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
				<ul class="vertical menu secondary categories">
					<li class="menu-item is-checked"><a data-filter="*">All</a></li>
					<?php
						$categories = get_categories( array(
							'orderby' => 'name',
							'order'   => 'ASC',
							'exclude' => array(1)
						) );
						
						foreach ( $categories as $category ) {
							printf( '<li class="menu-item" href="%1$s"><a data-filter=".%3$s">%2$s</a></li>',
								esc_url( get_category_link( $category->term_id ) ),
								esc_html( $category->name ),
								esc_html( $category->slug )
							);
						}
					?>
				</ul>
			</div>
			<!-- # end sidebar -->
			<div class="main cell small-6 medium-8">
				<div class="grid grid-x thumnails" data-masonry='{ "itemSelector": ".grid-item" }'>
					<div class="grid-sizer"></div>
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content-thumbnail', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content-thumbnail', 'none' );

					endif;
					?>
				</div>
			</div>
		</div>

		</main><!-- #main -->
		<!-- <aside>
		</aside> -->
	</div><!-- #primary -->

<?php
// get_sidebar();
// get_footer();

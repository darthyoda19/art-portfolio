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
				<?php
					$categories = get_categories( array(
						'orderby' => 'name',
						'order'   => 'ASC',
						'exclude' => array(1)
					) );
					
					foreach( $categories as $category ) {
						$category_link = sprintf( 
							'<a href="%1$s" alt="%2$s">%3$s</a>',
							esc_url( get_category_link( $category->term_id ) ),
							esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
							esc_html( $category->name )
						);
						
						echo '<p>' . sprintf( esc_html__( 'Category: %s', 'textdomain' ), $category_link ) . '</p> ';
						echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
						echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
					} 
				?>
				<?php
					get_template_part( 'template-parts/content-category-menu', get_post_type() );
				?>
			</div>
			<!-- # end sidebar -->
			<div class="main cell small-6 medium-8">
				<div class="button-group filters-button-group">
					<button class="button is-checked" data-filter="*">show all</button><br>
					<button class="button" data-filter=".pins">pins</button><br>
					<button class="button" data-filter=".paramore">paramore</button><br>
					<button class="button" data-filter=".coloring-books">coloring books</button>
				</div>
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
		<aside>
		</aside>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

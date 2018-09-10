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
			</div>
			<style>
				.grid {
					width: 100%;
				}
				.grid-item {
					/* width: 33.3333%; */
					/* height: 120px; */
					float: left;
					background-color: transparent;
					border: 10px solid transparent;
				}
			</style>
			<!-- # end sidebar -->
			<div class="main cell small-6 medium-8">
				<h1>Isotope - filtering</h1>
				<div class="button-group filters-button-group">
					<button class="button is-checked" data-filter="*">show all</button><br>
					<button class="button" data-filter=".metal">metal</button><br>
					<button class="button" data-filter=".transition">transition</button><br>
					<button class="button" data-filter=".alkali, .alkaline-earth">alkali and alkaline-earth</button><br>
					<button class="button" data-filter=":not(.transition)">not transition</button><br>
					<button class="button" data-filter=".metal:not(.transition)">metal but not transition</button><br>
					<button class="button" data-filter="numberGreaterThan50">number &gt; 50</button><br>
					<button class="button" data-filter="ium">name ends with –ium</button>
				</div>
				<div class="grid grid-x">
					<div class="grid-item cell small-12 medium-6 large-4 element-item transition metal" data-category="transition">
						<h3 class="name">Mercury</h3>
						<p class="symbol">Hg</p>
						<p class="number">80</p>
						<p class="weight">200.59</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item metalloid" data-category="metalloid">
						<h3 class="name">Tellurium</h3>
						<p class="symbol">Te</p>
						<p class="number">52</p>
						<p class="weight">127.6</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item post-transition metal" data-category="post-transition">
						<h3 class="name">Bismuth</h3>
						<p class="symbol">Bi</p>
						<p class="number">83</p>
						<p class="weight">208.980</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item post-transition metal" data-category="post-transition">
						<h3 class="name">Lead</h3>
						<p class="symbol">Pb</p>
						<p class="number">82</p>
						<p class="weight">207.2</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item transition metal" data-category="transition">
						<h3 class="name">Gold</h3>
						<p class="symbol">Au</p>
						<p class="number">79</p>
						<p class="weight">196.967</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item alkali metal" data-category="alkali">
						<h3 class="name">Potassium</h3>
						<p class="symbol">K</p>
						<p class="number">19</p>
						<p class="weight">39.0983</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item alkali metal" data-category="alkali">
						<h3 class="name">Sodium</h3>
						<p class="symbol">Na</p>
						<p class="number">11</p>
						<p class="weight">22.99</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item transition metal" data-category="transition">
						<h3 class="name">Cadmium</h3>
						<p class="symbol">Cd</p>
						<p class="number">48</p>
						<p class="weight">112.411</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item alkaline-earth metal" data-category="alkaline-earth">
						<h3 class="name">Calcium</h3>
						<p class="symbol">Ca</p>
						<p class="number">20</p>
						<p class="weight">40.078</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item transition metal" data-category="transition">
						<h3 class="name">Rhenium</h3>
						<p class="symbol">Re</p>
						<p class="number">75</p>
						<p class="weight">186.207</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item post-transition metal" data-category="post-transition">
						<h3 class="name">Thallium</h3>
						<p class="symbol">Tl</p>
						<p class="number">81</p>
						<p class="weight">204.383</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item metalloid" data-category="metalloid">
						<h3 class="name">Antimony</h3>
						<p class="symbol">Sb</p>
						<p class="number">51</p>
						<p class="weight">121.76</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item transition metal" data-category="transition">
						<h3 class="name">Cobalt</h3>
						<p class="symbol">Co</p>
						<p class="number">27</p>
						<p class="weight">58.933</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item lanthanoid metal inner-transition" data-category="lanthanoid">
						<h3 class="name">Ytterbium</h3>
						<p class="symbol">Yb</p>
						<p class="number">70</p>
						<p class="weight">173.054</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item noble-gas nonmetal" data-category="noble-gas">
						<h3 class="name">Argon</h3>
						<p class="symbol">Ar</p>
						<p class="number">18</p>
						<p class="weight">39.948</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item diatomic nonmetal" data-category="diatomic">
						<h3 class="name">Nitrogen</h3>
						<p class="symbol">N</p>
						<p class="number">7</p>
						<p class="weight">14.007</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item actinoid metal inner-transition" data-category="actinoid">
						<h3 class="name">Uranium</h3>
						<p class="symbol">U</p>
						<p class="number">92</p>
						<p class="weight">238.029</p>
					</div>
					<div class="grid-item cell small-12 medium-6 large-4 element-item actinoid metal inner-transition" data-category="actinoid">
						<h3 class="name">Plutonium</h3>
						<p class="symbol">Pu</p>
						<p class="number">94</p>
						<p class="weight">(244)</p>
					</div>
				</div>
			</div>
			<div class="main cell small-6 medium-8">
				<!-- <div class="grid grid-x" data-masonry='{ "itemSelector": ".grid-item" }' data-isotope='{ "itemSelector": ".grid-item", "layoutMode": "fitRows" }'> -->
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

		</main><!-- #main -->
		<aside>
		</aside>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

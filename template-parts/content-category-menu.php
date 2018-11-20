<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evelina-thoren
 */
?>
<?php
    // THUMBNAIL ITEM
	// Get variables.
	global $post;
	// Array of all categories of current post
	// List terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
	
	$orderby      = 'name'; 
	$show_count   = false;
	$pad_counts   = false;
	$hierarchical = true;
	$title        = '';
	$exclude = array(1);
	
	$args = array(
	'orderby'      => $orderby,
	'show_count'   => $show_count,
	'pad_counts'   => $pad_counts,
	'hierarchical' => $hierarchical,
	'title_li'     => $title,
	'exclude' => $exclude
	);

	$postCategoriesArray = wp_list_categories( $args );
	$postCategoriesSlugArray = [];
	// Create array of Category Slugs
	if(!empty($postCategoriesArray)){
		foreach($postCategoriesArray as $slugCategory) {
			?>
			<p><?php $slugCategory->slug ?></p>
			<?php
		}
	}
?>
<!-- #post-<?php the_ID(); ?> -->
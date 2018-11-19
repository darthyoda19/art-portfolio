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
	$postCategoriesArray = wp_list_categories();
	$postCategoriesSlugArray = [];
	// Create array of Category Slugs
	if(!empty($postCategoriesArray)){
		foreach($postCategoriesArray as $slugCategory) {
			array_push($postCategoriesSlugArray, $slugCategory->slug);
		}
	}
	// Category Slug array to string
	$postCategories = implode(" ",$postCategoriesSlugArray);
?>
<!-- #post-<?php the_ID(); ?> -->
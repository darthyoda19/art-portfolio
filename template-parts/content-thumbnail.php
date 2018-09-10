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
	$postCategoriesArray = get_the_category( $post->ID );
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
<div class="grid-item cell small-12 medium-6 large-4 <?php echo $postCategories; ?>">
	<a href="#">
		<img src="http://placehold.it/600" class="img-responsive" alt="thumbnail">
		<p><?php echo $postCategories; ?></p>
		<!-- <?php evelina_thoren_post_thumbnail(); ?> -->
	</a>
</div>
<!-- #post-<?php the_ID(); ?> -->

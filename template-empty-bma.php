<?php
// =============================================================================
// TEMPLATE NAME: BMA - Vide
// -----------------------------------------------------------------------------
// 
// =============================================================================

?>
<?php while ( have_posts() ) : the_post(); ?>
		
	<?php 
	 	$query = get_post(get_the_ID()); 
		$content = apply_filters('the_content', $query->post_content);

		echo $content;
	?>

<?php endwhile; ?>

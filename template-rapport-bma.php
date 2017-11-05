<?php
// =============================================================================
// TEMPLATE NAME: BMA - Poster
// -----------------------------------------------------------------------------
// 
// =============================================================================

?>
<!DOCTYPE html>
<!--[if lte IE 7]> <html class="ie-lte7" dir="ltr"> <![endif]-->
<!--[if lte IE 9]> <html class="ie-lte9" dir="ltr"> <![endif]-->
<!--[if !IE]><!--> <html dir="ltr">             <!--<![endif]-->
<html>
<head>
    <?php  
        include SO_SEQUENCE_MANAGER__PLUGIN_DIR . "includes/themes/header/header-rapport.php";
    ?>
</head>

<body class="rapport" ng-app="exerciceApp">

	<?php while ( have_posts() ) : the_post(); ?>
     	
		<?php 
		 	$query = get_post(get_the_ID()); 
    		$content = apply_filters('the_content', $query->post_content);

    		echo $content;
    	?>
    	
    <?php endwhile; ?>

    <?php  
        include SO_SEQUENCE_MANAGER__PLUGIN_DIR . "includes/themes/footer/footer-rapport.php";
    ?>
</body>
</html>

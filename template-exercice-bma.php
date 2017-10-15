<?php
// =============================================================================
// TEMPLATE NAME: BMA - Exercice
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
	$bma_plugin_url = plugins_url('bma-sequence-manager');
	$home_url = home_url('/');
?>
<link rel="icon" type="image/png" href="<?php echo $bma_plugin_url; ?>/images/fav.png">

<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/plyr.css">
<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/bma-questions.css">
<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/justine/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/justine/navBar.css">
<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/justine/blocs.css">
<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/justine/chat.css">
<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/justine/reponses.css">

<link href="https://fonts.googleapis.com/css?family=Abel|Bigshot+One|Cuprum|Francois+One|Iceberg|Jomhuria|Kreon|Nova+Slim|Open+Sans+Condensed:300|Ribeye|Stint+Ultra+Condensed|Titillium+Web|Vidaloka|Wellfleet" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


<script type='text/javascript' src='<?php echo $home_url; ?>wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='<?php echo $home_url; ?>wp-includes/js/jquery/jquery-migrate.min.js'></script>

<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/locales/bootstrap-datepicker.fr.min.js"></script>

<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/lib/angular.min.js"></script>


	<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/lib/angular-animate.min.js"></script>
    <script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/lib/angular-aria.min.js"></script>
	<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/lib/angular-material.min.js"></script>
	<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/lib/jk-rating-stars.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/jk-rating-stars.min.css"/>
    <link rel="stylesheet" href="<?php echo $bma_plugin_url; ?>/css/angular-material.min.css" />

	<style type="text/css">
		/* fallback */
		@font-face {
		  font-family: 'Material Icons';
		  font-style: normal;
		  font-weight: 400;
		  src: url(<?php echo $bma_plugin_url; ?>/fonts/materialicons.woff2) format('woff2');
		}

		.material-icons {
		  font-family: 'Material Icons';
		  font-weight: normal;
		  font-style: normal;
		  font-size: 24px;
		  line-height: 1;
		  letter-spacing: normal;
		  text-transform: none;
		  display: inline-block;
		  white-space: nowrap;
		  word-wrap: normal;
		  direction: ltr;
		  -webkit-font-feature-settings: 'liga';
		  -webkit-font-smoothing: antialiased;
		}
	</style>


<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/directives.js"></script>
<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/exos/exoApp.js"></script>
<script type='text/javascript'>
			var HOME_URL = "<?php echo get_home_url(); ?>";
			var bma_nonce = "<?php echo wp_create_nonce( 'wp_rest' ); ?>";
</script>

<script type="text/javascript" src="<?php echo SO_SEQUENCE_MANAGER__PLUGIN_URL;?>js/lib/highcharts/highcharts.js"></script>
<script type="text/javascript" src="<?php echo SO_SEQUENCE_MANAGER__PLUGIN_URL;?>js/lib/highcharts/highcharts-more.js"></script>

</head>
<body>

	<?php while ( have_posts() ) : the_post(); ?>
		
		<?php 
		 	$query = get_post(get_the_ID()); 
    		$content = apply_filters('the_content', $query->post_content);

    		echo $content;
    	?>

    <?php endwhile; ?>

    <script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/plyr.js"></script>
    <script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/plateau.js"></script>

</body>
</html>

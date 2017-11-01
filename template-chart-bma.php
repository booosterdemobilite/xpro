<?php
// =============================================================================
// TEMPLATE NAME: BMA - chart (Jeremy)
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
<script type='text/javascript'>
    var HOME_URL = '<?php echo $home_url;?>';
    var BMA_RESOURCE_URL = '<?php echo $bma_plugin_url;?>';
    var BMA_NONCE = '<?php echo wp_create_nonce( 'wp_rest' );?>';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $bma_plugin_url; ?>/css/jquery.jqplot.min.css" />
<!-- write your code here -->
</head>
<body>
    <?php while ( have_posts() ) : the_post(); ?>
        
        <?php 
            $query = get_post(get_the_ID()); 
            $content = apply_filters('the_content', $query->post_content);

            echo $content;
        ?>
        
    <?php endwhile; ?>
<script type="text/javascript" src="<?php echo SO_SEQUENCE_MANAGER__PLUGIN_URL;?>js/lib/highcharts/highcharts.js"></script>
<script type="text/javascript" src="<?php echo SO_SEQUENCE_MANAGER__PLUGIN_URL;?>js/lib/highcharts/highcharts-more.js"></script>

<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/lib/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/lib/plugins/jqplot.bubbleRenderer.js"></script>
<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/lib/plugins/jqplot.canvasAxisLabelRenderer.js"></script>
<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/lib/plugins/jqplot.canvasOverlay.js"></script>
<script type="text/javascript" src="<?php echo $bma_plugin_url; ?>/js/lib/plugins/jqplot.canvasTextRenderer.js"></script>
</body>
</html>
<?php
// =============================================================================
// TEMPLATE NAME: BMA - Partie 2 (Jeremy)
// -----------------------------------------------------------------------------
// 
// =============================================================================

?>
<!DOCTYPE html>
<!--[if lte IE 7]> <html class="ie-lte7" dir="ltr"> <![endif]-->
<!--[if lte IE 9]> <html class="ie-lte9" dir="ltr"> <![endif]-->
<!--[if !IE]><!--> <html dir="ltr">             <!--<![endif]-->
<?php 
    $bma_plugin_url = plugins_url('bma-sequence-manager');
    $home_url = home_url('/');
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="authoring-tool" content="Adobe_Animate_CC">
<title>mooc-test</title>
<!-- write your code here -->
<style>
  #animation_container, #_preload_div_ {
    position:absolute;
    margin:auto;
    left:0;right:0;
    top:0;bottom:0;
  }
</style>
<script type='text/javascript'>
    var HOME_URL = '<?php echo $home_url;?>';
    var BMA_RESOURCE_URL = '<?php echo $bma_plugin_url;?>';
    var BMA_NONCE = '<?php echo wp_create_nonce( 'wp_rest' );?>';
</script>

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
<script type='text/javascript' src='<?php echo $bma_plugin_url;?>/js/partie2/global-script.js'></script>
<!-- write your code here -->
</head>
<body onload="init();" style="margin:0px;">
    <?php while ( have_posts() ) : the_post(); ?>
        
        <?php 
            $query = get_post(get_the_ID()); 
            $content = apply_filters('the_content', $query->post_content);

            echo $content;
        ?>
        
    <?php endwhile; ?>
</body>
</html>
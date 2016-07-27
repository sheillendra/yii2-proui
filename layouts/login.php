<?php
use sheillendra\proui\assets\ProuiAsset;

$prouiAsset = ProuiAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ProUI - Responsive Bootstrap Admin Template</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo $prouiAsset->baseUrl;?>/img/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl;?>/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl;?>/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl;?>/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl;?>/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl;?>/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl;?>/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl;?>/img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl;?>/img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <!-- Login Background -->
        <div id="login-background">
            <!-- For best results use an image with a resolution of 2560x400 pixels (prefer a blurred image for smaller file size) -->
            <img src="<?php echo $prouiAsset->baseUrl;?>/img/placeholders/headers/login_header.jpg" alt="Login Background" class="animation-pulseSlow">
        </div>
        <!-- END Login Background -->

        <?php echo $content;?>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage();
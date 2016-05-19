<?php

use sheillendra\proui\assets\ProuiAsset;
use yii\helpers\Html;

$prouiAsset = ProuiAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo $prouiAsset->baseUrl?>/img/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl?>/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl?>/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl?>/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl?>/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl?>/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl?>/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl?>/img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="<?php echo $prouiAsset->baseUrl?>/img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->

        <!-- Related styles of various icon packs and plugins -->
        <!--<link rel="stylesheet" href="css/plugins.css">-->

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <!--<link rel="stylesheet" href="css/main.css">-->

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <!--<link rel="stylesheet" href="css/themes.css">-->
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="<?php echo $prouiAsset->baseUrl?>/js/vendor/modernizr-respond.min.js"></script>
         <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

                'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
                'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

                'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
                'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

                'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

                'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

                'style-alt'                                     for an alternative main style (without it: the default style)
                'footer-fixed'                                  for a fixed footer (without it: a static footer)

                'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links
            -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations header-fixed-top">
                
                <?php echo $this->render('@app/views/layouts/_sidebar_alt',['prouiAsset'=>$prouiAsset]) ?>

                <?php echo $this->render('@app/views/layouts/_sidebar',['prouiAsset'=>$prouiAsset]) ?>
                
                <!-- Main Container -->
                <div id="main-container">
                    <?php echo $this->render('@app/views/layouts/_header',['prouiAsset'=>$prouiAsset]) ?>
                    <!-- Page content -->
                    <div id="page-content">
                        <?php echo $this->render('@app/views/layouts/_content',['prouiAsset'=>$prouiAsset]) ?>
                    </div>
                    <!-- END Page Content -->

                    <?php echo $this->render('@app/views/layouts/_footer',['prouiAsset'=>$prouiAsset]) ?>
                    
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->

        <!-- Remember to include excanvas for IE8 chart support -->
        <!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <!--<script src="js/vendor/jquery-1.12.0.min.js"></script>-->
        <!--<script src="js/vendor/bootstrap.min.js"></script>-->
        <!--<script src="js/plugins.js"></script>-->
        <!--<script src="js/app.js"></script>-->

        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps -->
        <!--<script src="//maps.google.com/maps/api/js"></script>-->
        <!--<script src="js/helpers/gmaps.min.js"></script>-->

        <!-- Load and execute javascript code used only in this page -->
<!--        <script src="js/pages/index.js"></script>-->
        <!--<script>$(function(){ Index.init(); });</script>-->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
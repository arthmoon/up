<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?= Html::csrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

    <link href="/common/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap_limitless.css" rel="stylesheet" type="text/css">
    <link href="/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <?php $this->head() ?>
    <!-- Core JS files -->
    <script src="/common/js/main/jquery.min.js"></script>
    <script src="/common/js/main/bootstrap.bundle.min.js"></script>
    <script src="/common/js/plugins/loaders/blockui.min.js"></script>
    <script src="/common/js/plugins/ui/slinky.min.js"></script>
    <script src="/common/js/plugins/ui/fab.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/common/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="/common/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="/common/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="/common/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="/common/js/plugins/ui/moment/moment.min.js"></script>
    <script src="/common/js/plugins/pickers/daterangepicker.js"></script>

    <script src="/js/app.js"></script>
    <script src="/common/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body>
<?php $this->beginBody() ?>
<!-- Page header -->
<div class="page-header page-header-dark">

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark border-transparent">
        <div class="navbar-brand wmin-0 mr-5">
            <a href="index.html" class="d-inline-block">
                <img src="/images/logo.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-three-bars"></i>
            </button>
        </div>

        <?php if (!Yii::$app->user->isGuest): ?>
        <div class="collapse navbar-collapse" id="navbar-mobile">
<!--            <span class="badge bg-success-400">Premium</span>-->

            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-medal"></i>
                        <span class="d-md-none ml-2">Избранные</span>
                    </a>

                    <div class="dropdown-menu dropdown-content wmin-md-300">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Избранные</span>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <img src="/common/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                        <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="/common/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-title font-weight-semibold">Will Brason</a>
                                        <span class="d-block text-muted font-size-sm">Marketing manager</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="/common/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
                                        <span class="d-block text-muted font-size-sm">Project manager</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="/common/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
                                        <span class="d-block text-muted font-size-sm">Business developer</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="/common/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
                                        <span class="d-block text-muted font-size-sm">UX expert</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="#" class="text-grey mr-auto">Все избранные</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-bell3"></i>
                        <span class="d-md-none ml-2">События</span>
                        <span class="badge badge-mark border-green-300 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Latest activity</span>
                            <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                        <div class="font-size-sm text-muted mt-1">4 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
                                        <div class="font-size-sm text-muted mt-1">36 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
                                        <div class="font-size-sm text-muted mt-1">2 hours ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Shipping cost to the Netherlands has been reduced, database updated
                                        <div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
                                    </div>

                                    <div class="media-body">
                                        New review received on <a href="#">Server side integration</a> services
                                        <div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                        <div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="#" class="text-grey mr-auto">All activity</a>
                            <div>
                                <a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
                                <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                        <img src="/images/user/male/avatar1.png" class="rounded-circle mr-2" height="34" alt="">
                        <span><?= Yii::$app->user->identity->first_name . ' ' . Yii::$app->user->identity->last_name ?></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user"></i> Профиль</a>
                        <a href="#" class="dropdown-item"><i class="icon-pin-alt"></i> Заказы <span class="badge badge-pill bg-blue ml-auto">3</span></a>
                        <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Сообщения <span class="badge badge-pill bg-blue ml-auto">1</span></a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Настройки</a>
                        <?= Html::beginForm(['/site/logout'], 'post') ?>
                        <?= Html::submitButton(
                            '<i class="icon-switch2"></i> Выход',
                            ['class' => 'dropdown-item']
                        ) ?>
                        <?= Html::endForm() ?>
                    </div>
                </li>
            </ul>
        </div>
        <?php endif ?>
    </div>
    <!-- /main navbar -->

    <!-- Secondary navbar -->
    <div class="navbar navbar-expand-md navbar-dark border-top-0">
        <div class="d-md-none w-100">
            <button type="button" class="navbar-toggler d-flex align-items-center w-100" data-toggle="collapse" data-target="#navbar-navigation">
                <i class="icon-menu-open mr-2"></i>
                Меню
            </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar-navigation">
            <ul class="navbar-nav navbar-nav-highlight">
                <li class="nav-item">
                    <a href="index.html" class="navbar-nav-link active">
<!--                        <i class="icon-home5 mr-2"></i>-->
                        Главная
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
<!--                        <i class="icon-car2 mr-2"></i>-->
                        Автомобили
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header">Легковые</div>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-grid2"></i> Sidebars</a>
                            <div class="dropdown-menu">
                                <a href="../seed/sidebar_none.html" class="dropdown-item">No sidebar</a>
                                <a href="../seed/sidebar_main.html" class="dropdown-item">1 sidebar</a>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">2 sidebars</a>
                                    <div class="dropdown-menu">
                                        <a href="../seed/sidebar_secondary.html" class="dropdown-item">Secondary sidebar</a>
                                        <a href="../seed/sidebar_right.html" class="dropdown-item">Right sidebar</a>
                                    </div>
                                </div>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">3 sidebars</a>
                                    <div class="dropdown-menu">
                                        <a href="../seed/sidebar_right_hidden.html" class="dropdown-item">Right sidebar hidden</a>
                                        <a href="../seed/sidebar_right_visible.html" class="dropdown-item">Right sidebar visible</a>
                                    </div>
                                </div>
                                <a href="../seed/sidebar_sections.html" class="dropdown-item">Sectioned sidebar</a>
                                <a href="../seed/sidebar_stretched.html" class="dropdown-item">Stretched sidebar</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-paragraph-justify3"></i> Navbars</a>
                            <div class="dropdown-menu">
                                <a href="../seed/navbar_main_fixed.html" class="dropdown-item">Main navbar fixed</a>
                                <a href="../seed/navbar_main_hideable.html" class="dropdown-item">Main navbar hideable</a>
                                <a href="../seed/navbar_secondary_sticky.html" class="dropdown-item">Secondary navbar sticky</a>
                                <a href="../seed/navbar_both_fixed.html" class="dropdown-item">Both navbars fixed</a>
                            </div>
                        </div>
                        <div class="dropdown-header">Optional layouts</div>
                        <a href="../seed/layout_boxed.html" class="dropdown-item"><i class="icon-align-center-horizontal"></i> Boxed layout</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <!--                        <i class="icon-car2 mr-2"></i>-->
                        Услуги
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header">Легковые</div>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-grid2"></i> Sidebars</a>
                            <div class="dropdown-menu">
                                <a href="../seed/sidebar_none.html" class="dropdown-item">No sidebar</a>
                                <a href="../seed/sidebar_main.html" class="dropdown-item">1 sidebar</a>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">2 sidebars</a>
                                    <div class="dropdown-menu">
                                        <a href="../seed/sidebar_secondary.html" class="dropdown-item">Secondary sidebar</a>
                                        <a href="../seed/sidebar_right.html" class="dropdown-item">Right sidebar</a>
                                    </div>
                                </div>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">3 sidebars</a>
                                    <div class="dropdown-menu">
                                        <a href="../seed/sidebar_right_hidden.html" class="dropdown-item">Right sidebar hidden</a>
                                        <a href="../seed/sidebar_right_visible.html" class="dropdown-item">Right sidebar visible</a>
                                    </div>
                                </div>
                                <a href="../seed/sidebar_sections.html" class="dropdown-item">Sectioned sidebar</a>
                                <a href="../seed/sidebar_stretched.html" class="dropdown-item">Stretched sidebar</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-paragraph-justify3"></i> Navbars</a>
                            <div class="dropdown-menu">
                                <a href="../seed/navbar_main_fixed.html" class="dropdown-item">Main navbar fixed</a>
                                <a href="../seed/navbar_main_hideable.html" class="dropdown-item">Main navbar hideable</a>
                                <a href="../seed/navbar_secondary_sticky.html" class="dropdown-item">Secondary navbar sticky</a>
                                <a href="../seed/navbar_both_fixed.html" class="dropdown-item">Both navbars fixed</a>
                            </div>
                        </div>
                        <div class="dropdown-header">Optional layouts</div>
                        <a href="../seed/layout_boxed.html" class="dropdown-item"><i class="icon-align-center-horizontal"></i> Boxed layout</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <!--                        <i class="icon-car2 mr-2"></i>-->
                        Заказы
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header">Легковые</div>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-grid2"></i> Sidebars</a>
                            <div class="dropdown-menu">
                                <a href="../seed/sidebar_none.html" class="dropdown-item">No sidebar</a>
                                <a href="../seed/sidebar_main.html" class="dropdown-item">1 sidebar</a>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">2 sidebars</a>
                                    <div class="dropdown-menu">
                                        <a href="../seed/sidebar_secondary.html" class="dropdown-item">Secondary sidebar</a>
                                        <a href="../seed/sidebar_right.html" class="dropdown-item">Right sidebar</a>
                                    </div>
                                </div>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">3 sidebars</a>
                                    <div class="dropdown-menu">
                                        <a href="../seed/sidebar_right_hidden.html" class="dropdown-item">Right sidebar hidden</a>
                                        <a href="../seed/sidebar_right_visible.html" class="dropdown-item">Right sidebar visible</a>
                                    </div>
                                </div>
                                <a href="../seed/sidebar_sections.html" class="dropdown-item">Sectioned sidebar</a>
                                <a href="../seed/sidebar_stretched.html" class="dropdown-item">Stretched sidebar</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-paragraph-justify3"></i> Navbars</a>
                            <div class="dropdown-menu">
                                <a href="../seed/navbar_main_fixed.html" class="dropdown-item">Main navbar fixed</a>
                                <a href="../seed/navbar_main_hideable.html" class="dropdown-item">Main navbar hideable</a>
                                <a href="../seed/navbar_secondary_sticky.html" class="dropdown-item">Secondary navbar sticky</a>
                                <a href="../seed/navbar_both_fixed.html" class="dropdown-item">Both navbars fixed</a>
                            </div>
                        </div>
                        <div class="dropdown-header">Optional layouts</div>
                        <a href="../seed/layout_boxed.html" class="dropdown-item"><i class="icon-align-center-horizontal"></i> Boxed layout</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <!--                        <i class="icon-car2 mr-2"></i>-->
                        Информация
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header">Легковые</div>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-grid2"></i> Sidebars</a>
                            <div class="dropdown-menu">
                                <a href="../seed/sidebar_none.html" class="dropdown-item">No sidebar</a>
                                <a href="../seed/sidebar_main.html" class="dropdown-item">1 sidebar</a>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">2 sidebars</a>
                                    <div class="dropdown-menu">
                                        <a href="../seed/sidebar_secondary.html" class="dropdown-item">Secondary sidebar</a>
                                        <a href="../seed/sidebar_right.html" class="dropdown-item">Right sidebar</a>
                                    </div>
                                </div>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">3 sidebars</a>
                                    <div class="dropdown-menu">
                                        <a href="../seed/sidebar_right_hidden.html" class="dropdown-item">Right sidebar hidden</a>
                                        <a href="../seed/sidebar_right_visible.html" class="dropdown-item">Right sidebar visible</a>
                                    </div>
                                </div>
                                <a href="../seed/sidebar_sections.html" class="dropdown-item">Sectioned sidebar</a>
                                <a href="../seed/sidebar_stretched.html" class="dropdown-item">Stretched sidebar</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-paragraph-justify3"></i> Navbars</a>
                            <div class="dropdown-menu">
                                <a href="../seed/navbar_main_fixed.html" class="dropdown-item">Main navbar fixed</a>
                                <a href="../seed/navbar_main_hideable.html" class="dropdown-item">Main navbar hideable</a>
                                <a href="../seed/navbar_secondary_sticky.html" class="dropdown-item">Secondary navbar sticky</a>
                                <a href="../seed/navbar_both_fixed.html" class="dropdown-item">Both navbars fixed</a>
                            </div>
                        </div>
                        <div class="dropdown-header">Optional layouts</div>
                        <a href="../seed/layout_boxed.html" class="dropdown-item"><i class="icon-align-center-horizontal"></i> Boxed layout</a>
                    </div>
                </li>
            </ul>


            <ul class="navbar-nav navbar-nav-highlight ml-md-auto">
                <li class="nav-item dropdown">
                    <div class="header-elements bg-transparent py-0 border-0 mb-3 mb-md-0">
                        <form action="#">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="search" class="form-control bg-light-alpha border-transparent wmin-md-250" placeholder="Поиск">
                                <div class="form-control-feedback">
                                    <i class="icon-search4 font-size-sm"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /secondary navbar -->


    <!-- Floating menu -->
    <ul class="fab-menu fab-menu-absolute fab-menu-top-right" data-fab-toggle="click">
        <li>
            <a class="fab-menu-btn btn bg-green-300 btn-float rounded-round btn-icon">
                <i class="fab-icon-open icon-plus3"></i>
                <i class="fab-icon-close icon-cross2"></i>
            </a>

            <ul class="fab-menu-inner">
                <li>
                    <div data-fab-label="Compose email">
                        <a href="#" class="btn btn-light rounded-round btn-icon btn-float">
                            <i class="icon-pencil"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div data-fab-label="Conversations">
                        <a href="#" class="btn btn-light rounded-round btn-icon btn-float">
                            <i class="icon-bubbles7"></i>
                        </a>
                        <span class="badge badge-pill bg-primary-400">5</span>
                    </div>
                </li>
                <li>
                    <div data-fab-label="Chat with Jack">
                        <a href="#" class="btn bg-pink-400 rounded-round btn-icon btn-float">
                            <img src="/common/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle" alt="">
                        </a>
                        <span class="badge badge-mark border-pink-400"></span>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /floating menu -->

</div>
<!-- /page header -->


<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">



        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->


<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-three-bars mr-2"></i>
            Информация
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				&copy; 2018 - 2019. <a href="#">UNIPARK</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Arthur Moon</a>
			</span>

        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item"><a href="#" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Тех. поддержка</a></li>
            <li class="nav-item"><a href="#" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Инструкция</a></li>
            <li class="nav-item"><a href="#" class="navbar-nav-link font-weight-semibold"><span class="text-green-400"><i class="icon-coin-dollar mr-2"></i> Поддержать</span></a></li>
        </ul>
    </div>
</div>
<!-- /footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

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
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap_limitless.css" rel="stylesheet" type="text/css">
    <link href="/css/layout.css" rel="stylesheet" type="text/css">
    <link href="/css/components.css" rel="stylesheet" type="text/css">
    <link href="/css/colors.css" rel="stylesheet" type="text/css">
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

    <script src="/common/js/plugins/media/fancybox.min.js"></script>
    <script src="/common/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="/js/app.js"></script>
    <script src="/common/js/demo_pages/dashboard.js"></script>
    <script src="/common/js/demo_pages/ecommerce_product_list.js"></script>
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
            <button class="navbar-toggler sidebar-mobile-component-toggle" type="button">
                <i class="icon-filter3"></i>
            </button>
        </div>

        <?php if (!Yii::$app->user->isGuest): ?>
        <div class="collapse navbar-collapse" id="navbar-mobile">
<!--            <span class="badge bg-success-400">Premium</span>-->

            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-medal"></i>
                        <span class="d-md-none ml-2">Избранные111</span>
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
                                        <a href="#" class="media-title font-weight-semibold">Нурсултан Ибрагимов</a>
                                        <span class="d-block text-muted font-size-sm">Subaru Outback 2011</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="/common/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-title font-weight-semibold">Максим UNIPARK</a>
                                        <span class="d-block text-muted font-size-sm">Toyota Camry 2010</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
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
                        <span class="d-md-none ml-2">Уведомления</span>
                        <span class="badge badge-mark border-green-300 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Уведомления</span>
<!--                            <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>-->
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-car"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Азамат</a> откликнулся на Ваш заказ
                                        <div class="font-size-sm text-muted mt-1">4 минуты назад</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-car"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Даурен</a> откликнулся на Ваш заказ
                                        <div class="font-size-sm text-muted mt-1">4 минуты назад</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-cash"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Вам поступил заказ</a>
                                        <div class="font-size-sm text-muted mt-1">2 минуты назад</div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="#" class="text-grey mr-auto">Все уведомления</a>
                            <div>
                                <a href="#" class="text-grey" data-popup="tooltip" title="Прочитано"><i class="icon-checkmark3"></i></a>
                                <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Настройки событий"><i class="icon-gear"></i></a>
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
<!--                        <div class="dropdown-header">Легковые</div>-->
                        <a href="#" class="dropdown-item">Легковые</a>
                        <a href="#" class="dropdown-item">Грузовые</a>
<!--                        <div class="dropdown-header">Optional layouts</div>-->
                        <a href="#" class="dropdown-item">Автобусы</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <!--                        <i class="icon-car2 mr-2"></i>-->
                        Услуги
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle">С авто</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Авто без водителя</a>
                                <a href="#" class="dropdown-item">Авто с водителем</a>
                                <a href="#" class="dropdown-item">Доставка развока</a>
                                <a href="#" class="dropdown-item">Грузоперевозки</a>
                                <a href="#" class="dropdown-item">Такси</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle">Без авто</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Услуги водителя</a>
                                <a href="#" class="dropdown-item">Трезвый водитель</a>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <!--                        <i class="icon-car2 mr-2"></i>-->
                        Заказы
                    </a>

                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Новые</a>
                        <a href="#" class="dropdown-item">В работе</a>
                        <a href="#" class="dropdown-item">Выполненые</a>
                        <a href="#" class="dropdown-item">История</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <!--                        <i class="icon-car2 mr-2"></i>-->
                        Информация
                    </a>

                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">О нас</a>
                        <a href="#" class="dropdown-item">Контакты</a>
                        <a href="#" class="dropdown-item">Гарантии</a>
                        <a href="#" class="dropdown-item">Оплата</a>
                    </div>
                </li>
            </ul>


            <ul class="navbar-nav navbar-nav-highlight ml-md-auto">
                <li class="nav-item dropdown">
                    <div class="header-elements bg-transparent py-0 border-0 mb-3 mb-md-0"  id="navbar-search">
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

            <!-- Inner container -->
            <div class="d-flex align-items-start flex-column flex-md-row">
                <!-- Right sidebar component -->
                <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left border-0 shadow-0 order-1 order-md-1 sidebar-expand-md">

                    <!-- Sidebar content -->
                    <div class="sidebar-content">

                        <!-- Categories -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="search" class="form-control" placeholder="Search">
                                        <div class="form-control-feedback">
                                            <i class="icon-search4 font-size-base text-muted"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="card-body border-0 p-0">
                                <ul class="nav nav-sidebar mb-2">
                                    <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
                                        <a href="#" class="nav-link">Street wear</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#" class="nav-link">Hoodies</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Jackets</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link active">Pants</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Shirts</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Sweaters</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Tank tops</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Underwear</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">Snow wear</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#" class="nav-link">Fleece jackets</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Gloves</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Ski jackets</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Ski pants</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Snowboard jackets</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Snowboard pants</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Technical underwear</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">Shoes</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#" class="nav-link">Laces</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Sandals</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Skate shoes</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Slip ons</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Sneakers</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Winter shoes</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">Accessories</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#" class="nav-link">Beanies</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Belts</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Caps</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Sunglasses</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Headphones</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Video cameras</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Wallets</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Watches</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /categories -->


                        <!-- Filters -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Filter products</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="form-group form-group-feedback form-group-feedback-left">
                                            <input type="search" class="form-control" placeholder="Search brand">
                                            <div class="form-control-feedback">
                                                <i class="icon-search4 font-size-base text-muted"></i>
                                            </div>
                                        </div>

                                        <div class="overflow-auto" style="max-height: 192px;">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    686
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    A.Lab
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Adidas
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    ALIS
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Analog
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Burton
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Atomic
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Armada
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    O'Neill
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Baja
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Baker
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Blue Parks
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Billabong
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Bonfire
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Brixton
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="font-size-xs text-uppercase text-muted mb-3">Items for</div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Men
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Women
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Kids
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Unisex
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="font-size-xs text-uppercase text-muted mb-3">Size</div>

                                        <div class="row row-labels">
                                            <div class="col-3">
                                                <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXS</a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XS</a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">S</a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#" class="badge badge-flat border-warning text-warning-800 d-flex justify-content-center p-2 mb-2">M</a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">L</a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XL</a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXL</a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXXL</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="font-size-xs text-uppercase text-muted mb-3">Fit</div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Slim fit
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Skinny fit
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Regular fit
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Loose fit
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Long cut
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="font-size-xs text-uppercase text-muted mb-3">Color</div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <a href="#" class="d-block p-2 bg-primary rounded"><div class="py-1"></div></a>
                                                    <div class="font-size-sm text-center text-muted mt-1">Blue</div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <a href="#" class="d-block p-2 bg-warning rounded"><div class="py-1"></div></a>
                                                    <div class="font-size-sm text-center text-muted mt-1">Orange</div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <a href="#" class="d-block p-2 bg-teal rounded"><div class="py-1"></div></a>
                                                    <div class="font-size-sm text-center text-muted mt-1">Teal</div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <a href="#" class="d-block p-2 bg-pink rounded color-selector-active">
                                                        <div class="py-1"></div>
                                                        <i class="icon-checkmark3"></i>
                                                    </a>
                                                    <div class="font-size-sm text-center text-muted mt-1">Pink</div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <a href="#" class="d-block p-2 bg-grey-800 rounded"><div class="py-1"></div></a>
                                                    <div class="font-size-sm text-center text-muted mt-1">Black</div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <a href="#" class="d-block p-2 bg-purple rounded"><div class="py-1"></div></a>
                                                    <div class="font-size-sm text-center text-muted mt-1">Purple</div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <a href="#" class="d-block p-2 bg-success rounded"><div class="py-1"></div></a>
                                                    <div class="font-size-sm text-center text-muted mt-1">Green</div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <a href="#" class="d-block p-2 bg-danger rounded"><div class="py-1"></div></a>
                                                    <div class="font-size-sm text-center text-muted mt-1">Red</div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <a href="#" class="d-block p-2 bg-info rounded"><div class="py-1"></div></a>
                                                    <div class="font-size-sm text-center text-muted mt-1">Cyan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="font-size-xs text-uppercase text-muted mb-3">Features</div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Crew neck
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Chest pocket
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Raglan sleeves
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Polo neck
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                V-neck
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                High collar
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Hood
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Button strip
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Wide neck
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Kangaroo pocket
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="font-size-xs text-uppercase text-muted mb-3">Material features</div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Canvas
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Lined
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Merino
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Quick drying
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Stretch
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Water repellent
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Windproof
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn bg-blue btn-block">Filter</button>
                                </form>
                            </div>
                        </div>
                        <!-- /filters -->

                    </div>
                    <!-- /sidebar content -->

                </div>
                <!-- /right sidebar component -->

                <!-- Left content -->
                <div class="w-100 overflow-auto order-2 order-md-2 left-content">

                    <!-- Grid -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img-actions">
                                        <a href="/common/images/placeholders/placeholder.jpg" data-popup="lightbox">
                                            <img src="/common/images/placeholders/placeholder.jpg" class="card-img" width="96" alt="">
                                            <span class="card-img-actions-overlay card-img">
													<i class="icon-plus3 icon-2x"></i>
												</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-0">
                                            <a href="#" class="text-default">Fathom Backpack</a>
                                        </h6>

                                        <a href="#" class="text-muted">Men's Accessories</a>
                                    </div>

                                    <h3 class="mb-0 font-weight-semibold">$49.99</h3>

                                    <div>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                    </div>

                                    <div class="text-muted mb-3">85 reviews</div>

                                    <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img-actions">
                                        <a href="/common/images/placeholders/placeholder.jpg" data-popup="lightbox">
                                            <img src="/common/images/placeholders/placeholder.jpg" class="card-img" width="96" alt="">
                                            <span class="card-img-actions-overlay card-img">
													<i class="icon-plus3 icon-2x"></i>
												</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-0">
                                            <a href="#" class="text-default mb-0">Mystery Air Long Sleeve T Shirt</a>
                                        </h6>

                                        <a href="#" class="text-muted">Men's Fashion</a>
                                    </div>

                                    <h3 class="mb-0 font-weight-semibold">$25.99</h3>

                                    <div>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-half font-size-base text-warning-300"></i>
                                    </div>

                                    <div class="text-muted mb-3">34 reviews</div>

                                    <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img-actions">
                                        <a href="/common/images/placeholders/placeholder.jpg" data-popup="lightbox">
                                            <img src="/common/images/placeholders/placeholder.jpg" class="card-img" width="96" alt="">
                                            <span class="card-img-actions-overlay card-img">
													<i class="icon-plus3 icon-2x"></i>
												</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-0">
                                            <a href="#" class="text-default mb-0">Women’s Prospect Backpack</a>
                                        </h6>

                                        <a href="#" class="text-muted">Women's Accessories</a>
                                    </div>

                                    <h3 class="mb-0 font-weight-semibold">$63.99</h3>

                                    <div>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-empty3 font-size-base text-warning-300"></i>
                                    </div>

                                    <div class="text-muted mb-3">63 reviews</div>

                                    <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img-actions">
                                        <a href="/common/images/placeholders/placeholder.jpg" data-popup="lightbox">
                                            <img src="/common/images/placeholders/placeholder.jpg" class="card-img" width="96" alt="">
                                            <span class="card-img-actions-overlay card-img">
													<i class="icon-plus3 icon-2x"></i>
												</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-0">
                                            <a href="#" class="text-default">Fathom Backpack</a>
                                        </h6>

                                        <a href="#" class="text-muted">Men's Accessories</a>
                                    </div>

                                    <h3 class="mb-0 font-weight-semibold">$49.99</h3>

                                    <div>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                    </div>

                                    <div class="text-muted mb-3">85 reviews</div>

                                    <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img-actions">
                                        <a href="/common/images/placeholders/placeholder.jpg" data-popup="lightbox">
                                            <img src="/common/images/placeholders/placeholder.jpg" class="card-img" width="96" alt="">
                                            <span class="card-img-actions-overlay card-img">
													<i class="icon-plus3 icon-2x"></i>
												</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-0">
                                            <a href="#" class="text-default mb-0">Mystery Air Long Sleeve T Shirt</a>
                                        </h6>

                                        <a href="#" class="text-muted">Men's Fashion</a>
                                    </div>

                                    <h3 class="mb-0 font-weight-semibold">$25.99</h3>

                                    <div>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-half font-size-base text-warning-300"></i>
                                    </div>

                                    <div class="text-muted mb-3">34 reviews</div>

                                    <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img-actions">
                                        <a href="/common/images/placeholders/placeholder.jpg" data-popup="lightbox">
                                            <img src="/common/images/placeholders/placeholder.jpg" class="card-img" width="96" alt="">
                                            <span class="card-img-actions-overlay card-img">
													<i class="icon-plus3 icon-2x"></i>
												</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-0">
                                            <a href="#" class="text-default mb-0">Women’s Prospect Backpack</a>
                                        </h6>

                                        <a href="#" class="text-muted">Women's Accessories</a>
                                    </div>

                                    <h3 class="mb-0 font-weight-semibold">$63.99</h3>

                                    <div>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-empty3 font-size-base text-warning-300"></i>
                                    </div>

                                    <div class="text-muted mb-3">63 reviews</div>

                                    <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img-actions">
                                        <a href="/common/images/placeholders/placeholder.jpg" data-popup="lightbox">
                                            <img src="/common/images/placeholders/placeholder.jpg" class="card-img" width="96" alt="">
                                            <span class="card-img-actions-overlay card-img">
													<i class="icon-plus3 icon-2x"></i>
												</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-0">
                                            <a href="#" class="text-default">Fathom Backpack</a>
                                        </h6>

                                        <a href="#" class="text-muted">Men's Accessories</a>
                                    </div>

                                    <h3 class="mb-0 font-weight-semibold">$49.99</h3>

                                    <div>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                    </div>

                                    <div class="text-muted mb-3">85 reviews</div>

                                    <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img-actions">
                                        <a href="/common/images/placeholders/placeholder.jpg" data-popup="lightbox">
                                            <img src="/common/images/placeholders/placeholder.jpg" class="card-img" width="96" alt="">
                                            <span class="card-img-actions-overlay card-img">
													<i class="icon-plus3 icon-2x"></i>
												</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-0">
                                            <a href="#" class="text-default mb-0">Mystery Air Long Sleeve T Shirt</a>
                                        </h6>

                                        <a href="#" class="text-muted">Men's Fashion</a>
                                    </div>

                                    <h3 class="mb-0 font-weight-semibold">$25.99</h3>

                                    <div>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-half font-size-base text-warning-300"></i>
                                    </div>

                                    <div class="text-muted mb-3">34 reviews</div>

                                    <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img-actions">
                                        <a href="/common/images/placeholders/placeholder.jpg" data-popup="lightbox">
                                            <img src="/common/images/placeholders/placeholder.jpg" class="card-img" width="96" alt="">
                                            <span class="card-img-actions-overlay card-img">
													<i class="icon-plus3 icon-2x"></i>
												</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-0">
                                            <a href="#" class="text-default mb-0">Women’s Prospect Backpack</a>
                                        </h6>

                                        <a href="#" class="text-muted">Women's Accessories</a>
                                    </div>

                                    <h3 class="mb-0 font-weight-semibold">$63.99</h3>

                                    <div>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-empty3 font-size-base text-warning-300"></i>
                                    </div>

                                    <div class="text-muted mb-3">63 reviews</div>

                                    <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /grid -->


                    <!-- Pagination -->
                    <div class="d-flex justify-content-center pt-3 mb-3">
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
                        </ul>
                    </div>
                    <!-- /pagination -->

                </div>
                <!-- /left content -->
            </div>

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

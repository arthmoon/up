<?php
/**
 * Created by PhpStorm.
 * User: IT
 * Date: 18.10.2018
 * Time: 14:24
 *
 * @var string $content
 */

use yii\helpers\Html;

\frontend\assets\AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= Html::encode($this->title) ?></title>
    <?= Html::csrfMetaTags() ?>

    <?php $this->head() ?>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/common/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
<!--    <script src="/common/js/main/jquery.min.js"></script>-->
    <script src="/common/js/main/bootstrap.bundle.min.js"></script>
    <script src="/common/js/plugins/loaders/blockui.min.js"></script>
    <script src="/common/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/common/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/common/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body>
<?php $this->beginBody() ?>

<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <?= $content ?>

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


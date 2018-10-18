<?php
/**
 * @var $this yii\web\View
 * @var $form yii\bootstrap\ActiveForm
 * @var $model \common\models\LoginForm
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\MaskedInput;
use yii\helpers\Url;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="site-login">-->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>Please fill out the following fields to login:</p>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!--            --><?php //$form = ActiveForm::begin(['id' => 'login-form']); ?>
<!---->
<!--                --><?//= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<!---->
<!--                --><?//= $form->field($model, 'password')->passwordInput() ?>
<!---->
<!--                --><?//= $form->field($model, 'rememberMe')->checkbox() ?>
<!---->
<!--                <div style="color:#999;margin:1em 0">-->
<!--                    If you forgot your password you can --><?//= Html::a('reset it', ['site/request-password-reset']) ?><!--.-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    --><?//= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<!--                </div>-->
<!---->
<!--            --><?php //ActiveForm::end(); ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- Login form -->

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => [
        'class' => 'login-form'
    ]
]); ?>
    <div class="card mb-0">
        <div class="card-body">
            <div class="text-center mb-3">
                <?= Html::img('/images/logo_text.png') ?>
<!--                <h5 class="mb-0">Авторизация</h5>-->
                <span class="d-block text-muted">Авторизация</span>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-left">
                <?= $form->field($model, 'username', [
                        'errorOptions' => [
                            'class' => 'form-text text-danger'
                        ]
                    ])
                    ->widget(MaskedInput::classname(), [
                        'mask'          => '+9 (999) 999 99 99',
                        'options'       => [
                            'class'       => 'form-control',
                            'placeholder' => 'Телефон',
                        ]
                    ])
                    ->label(false);
                ?>
                <div class="form-control-feedback">
                    <i class="icon-phone2 text-muted"></i>
                </div>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-left">
                <?= $form
                    ->field($model, 'password', [
                        'errorOptions' => [
                            'class' => 'form-text text-danger'
                        ]
                    ])
                    ->passwordInput([
                        'class'       => 'form-control',
                        'placeholder' => 'Пароль',
                        'type'        => 'password'
                    ])
                    ->label(false)
                ?>
                <div class="form-control-feedback">
                    <i class="icon-lock2 text-muted"></i>
                </div>
            </div>

            <div class="form-group d-flex align-items-center">
                <div class="form-check mb-0">
                    <label class="form-check-label">
<!--                        --><?//= $form
//                            ->field($model, 'rememberMe')->checkbox([
//                                'class'     => 'form-input-styled',
//                                'data-fouc' => ''
//                            ])
//                            ->label(false)
//                        ?>
                        <input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
                        Запомнить
                    </label>
                </div>

                <?= Html::a('Забыли пароль?', Url::to(['site/signup']), [
                    'class' => 'ml-auto'
                ]) ?>
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary btn-block">Войти <i class="icon-circle-right2 ml-2"></i></button>
            </div>

            <div class="form-group text-center text-muted content-divider">
                <span class="px-2">Войти через</span>
            </div>

            <div class="form-group text-center">
                <button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2"><i class="icon-facebook"></i></button>
                <button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i class="icon-google-plus"></i></button>
            </div>

            <div class="form-group text-center text-muted content-divider">
                <span class="px-2">Еще не зарегестрированы?</span>
            </div>

            <div class="form-group">
                <a href="#" class="btn btn-light btn-block">Регистрация</a>
            </div>

            <span class="form-text text-center text-muted">Авторизовавшись, вы соглашаетесь с <a href="#">Договор оферты</a> и <br/> <a href="#">Политика конфиденциальности</a></span>
        </div>
    </div>
<?php ActiveForm::end() ?>
<!-- /login form -->



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
<!--                <span class="d-block text-muted">Авторизация</span>-->
            </div>

            <div class="form-group form-group-feedback form-group-feedback-left">
                <?= $form->field($model, 'phone', [
                        'errorOptions' => [
                            'class' => 'form-text text-danger'
                        ]
                    ])
                    ->widget(MaskedInput::className(), [
                        'mask'          => '+99999999999',
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
                    ->label(false) ?>

                <div class="form-control-feedback">
                    <i class="icon-lock2 text-muted"></i>
                </div>
            </div>

            <div class="form-group d-flex align-items-center">
                <div class="form-check mb-0">
                    <label class="form-check-label">
                        <?= $form
                            ->field($model, 'rememberMe', [
                                'errorOptions' => [
                                    'class' => 'd-none'
                                ],
                                'template'  => "{label}"
                            ])
                            ->checkbox([
                                'class'     => 'form-input-styled',
                                'checked'   => false,
                                'data-fouc' => ''
                            ])
                            ->label(false) ?>
                        Запомнить
                    </label>
                </div>

                <?= Html::a('Забыли пароль?', Url::to(['site/signup']), [
                    'class' => 'ml-auto'
                ]) ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton(
                    'Войти <i class="icon-enter ml-2"></i>', [
                    'class' => 'btn btn-primary btn-block'
                ]) ?>
            </div>

            <div class="form-group text-center text-muted content-divider">
                <span class="px-2">Войти через</span>
            </div>

            <div class="form-group text-center">
                <button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2">
                    <i class="icon-facebook"></i>
                </button>
                <button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2">
                    <i class="icon-google-plus"></i>
                </button>
            </div>

            <div class="form-group text-center text-muted content-divider">
                <span class="px-2">Еще не зарегестрированы?</span>
            </div>

            <div class="form-group">
                <a href="#" class="btn btn-light btn-block">Регистрация</a>
            </div>

            <span class="form-text text-center text-muted">
                Авторизовавшись, вы соглашаетесь с
                <?= Html::a('Договор оферты', '#') ?> <br/>
                <?= Html::a('Политика конфиденциальности', '#') ?>
            </span>
        </div>
    </div>
<?php ActiveForm::end() ?>
<!-- /login form -->



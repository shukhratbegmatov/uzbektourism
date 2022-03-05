<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<style type="text/css">
    .form-form {
        width: 50%;
        display: flex;
        flex-direction: column;
        min-height: 100%;
        margin: 0 auto;
    }


    .text-left {
        text-align: left!important;
    }
    *, ::after, ::before {
        box-sizing: border-box;
    }
    .form-form .form-form-wrap form .field-wrapper.input {
        padding: 11px 0px 16px 0;
        border-bottom: none;
        position: relative;
    }
    .form-form .form-form-wrap form .field-wrapper {
        width: 100%;
    }
    .form-form .form-form-wrap form .field-wrapper label {
        font-size: 10px;
        font-weight: 700;
        color: #3b3f5c;
        margin-bottom: 8px;
    }
    .form-group label, label {
        font-size: 15px;
        color: #acb0c3;
        letter-spacing: 1px;
    }
    label {
        display: inline-block;
        margin-bottom: .5rem;
    }
    .form-form .form-form-wrap form .field-wrapper svg:not(.feather-eye) {
        position: absolute;
        left: 12px;
        color: #888ea8;
        fill: rgba(0, 23, 55, 0.08);
        width: 20px;
        height: 20px;
    }
    .form-form .form-form-wrap form .field-wrapper svg.feather-user {
        top: 43px;
    }

    .form-form .form-form-wrap form .field-wrapper a.forgot-pass-link {
        font-weight: 600;
        color: #888ea8;
        display: block;
        letter-spacing: 1px;
        font-size: 12px;
        margin-bottom: 8px;
    }
    .form-form .form-form-wrap form .field-wrapper svg.feather-lock {
        top: 39px;
    }

    .form-form .form-form-wrap {
        max-width: 480px;
        margin: 0 auto;
        min-width: 311px;
        min-height: 100%;
        align-self: center;
        width: 100%;
        height: 100vh;
        justify-content: center;
    }

    .form-form .form-container .form-content {
        display: block;
        width: 100%;
        padding: 25px;
        background: #fff;
        text-align: center;
        border-radius: 15px;
        border: 1px solid #e0e6ed;
        -webkit-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.09019607843137255), 0 1px 20px 0 rgba(0, 0, 0, 0.08), 0px 1px 11px 0px rgba(0, 0, 0, 0.06);
        -moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.09019607843137255), 0 1px 20px 0 rgba(0, 0, 0, 0.08), 0px 1px 11px 0px rgba(0, 0, 0, 0.06);
        box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.09019607843137255), 0 1px 20px 0 rgba(0, 0, 0, 0.08), 0px 1px 11px 0px rgba(0, 0, 0, 0.06);
    }
    .form-form .form-form-wrap form .field-wrapper button.btn {
        align-self: center;
        width: 100%;
        padding: 11px 14px;
        font-size: 16px;
        letter-spacing: 2px;
    }
</style>
<div class="form-container outer" style="margin-top: 100px">
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">

                    <h1 class="">Sign In</h1>
                    <p class="">Log in to your account to continue.</p>
                        <?php $form = ActiveForm::begin(['options' => ['class' => 'text-left']]); ?>
                        <div class="form">

                            <div id="username-field" class="field-wrapper input">
                                <label for="username">USERNAME</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'style' => 'padding-left: 35px',  'class' => 'form-control', 'placeholder' => "Login"])->label(false) ?>
                            </div>
                            <div id="password-field" class="field-wrapper input mb-2">
                                <div class="d-flex justify-content-between">
                                    <label for="password">PASSWORD</label>
<!--                                    <a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a>-->
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <?= $form->field($model, 'password')->passwordInput(['style' => 'padding-left: 35px',  'class' => 'form-control', 'placeholder' => "Password"])->label(false) ?>
                            </div>

                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper">
                                    <button type="submit" class="btn btn-primary" value="">Log In</button>
                                </div>
                            </div>
                        </div>
                    <?= $form->field($model,'code')->widget(\Baha2Odeh\RecaptchaV3\RecaptchaV3Widget::className()); ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

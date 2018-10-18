<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>

<style type="text/css">
.help-block {
    position: absolute;
    top: 3px;
    right: 15px;
    font-size: 14px;
}
.form-group {
    position: relative;
}
strong {
    font-size: 16px;
}
</style>

<div class="site-login">

    <br/>
    <br/>
    <br/>
    <p class="text-muted">Please fill out the following fields to login:</p>
    <br/>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?php echo $form->field($model, 'username')->textInput(['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Username'])->label(false); ?>

                <?php echo $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'placeholder' => 'Password'])->label(false); ?>

                <br/>

                <div class="form-group">
                    <?php echo Html::submitButton('Sign In', ['class' => 'btn', 'name' => 'login-button']); ?>
                </div><br/>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

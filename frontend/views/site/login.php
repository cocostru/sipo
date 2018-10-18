<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'siberianpower.io';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
.site-login {
    width: 400px;
    margin-top: 20%;
}
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
    <strong class="text-primary"><?= Html::encode($this->title) ?></strong><br/><br/><br/>

        <div>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?php //echo $form->field($model, 'username')->textInput(['autofocus' => true]); ?>
                <?php echo $form->field($model, 'username')->textInput(['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Email Address'])->label(false); ?>

                <?php echo $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'placeholder' => 'Password'])->label(false); ?><br/>

                <?php //echo $form->field($model, 'rememberMe')->checkbox(); ?>

                <div class="form-group">
                    <?php echo Html::submitButton('Sign In', ['class' => 'btn', 'name' => 'login-button']); ?>
                </div><br/>

            <?php ActiveForm::end(); ?>
        </div>
</div>

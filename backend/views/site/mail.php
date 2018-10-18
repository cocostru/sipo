<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use common\models\User;

$this->title = 'Mail';

?>

<style type="text/css">
textarea {
    padding-top: 12px!important;
}
.help-block {
    padding-left: 17px;
    font-size: 14px;
}
label {
    font-weight: normal;
    color: #aaa;
    font-size: 14px;
}
</style>

<div class="site-contact">


    <div class="form-mail">

    	<h3>Mailing</h3><br/>
        <br/><br/>

        <div>
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'email')->textInput([
                        'placeholder' => 'Email', 
                        'class' => 'form-control', 
                        'value' => 'stotoev@siberianpower.io',
                        // 'value' => User::findIdentity(Yii::$app->user->getId())->email,
                        // 'readonly' => true,
                    ])->label('From:') 
                ?>
                <?= $form->field($model, 'to')->textInput([
                        'placeholder' => 'some@email.com', 
                        'class' => 'form-control', 
                        'value' => '',
                        // 'value' => User::findIdentity(Yii::$app->user->getId())->email,
                        // 'readonly' => true,
                    ])->label('To:') 
                ?>
                <?= $form->field($model, 'name')->textInput([
                    'placeholder' => 'Your Name', 
                    'class' => 'form-control', 
                    'value' => User::findIdentity(Yii::$app->user->getId())->name_first ?? '',
                ])->label('Your Name:') ?>

                <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Define Subject', 'class' => 'form-control'])->label('Subject:') ?>
                <?= $form->field($model, 'body')->textarea(['rows' => 7, 'placeholder' => 'Write down your message...', 'class' => 'form-control'])->label('Message:') ?>

                <br/><br/>

                <div class="form-group">
                    <?= Html::submitButton('Send Message', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>

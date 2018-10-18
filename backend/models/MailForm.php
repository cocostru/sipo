<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class MailForm extends Model
{
    public $name;
    public $email;
    public $to;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'to', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Captcha Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        // Yii::$app->mailer->compose()
        //     ->setTo(Yii::$app->params['contactEmail'])
        //     ->setFrom([$email => $this->email])
        //     ->setSubject($this->subject)
        //     ->setTextBody($this->body)
        //     ->send();

        return Yii::$app->mailer->compose()
            ->setTo($this->to)
            ->setFrom([$email => $this->email])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}

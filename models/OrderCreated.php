<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_created".
 *
 * @property int $id
 * @property string $date
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int $sum
 * @property string $status
 */
class OrderCreated extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_created';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required'],
            [['email'], 'email'],
            [['name', 'email', 'phone', 'status'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone'
        ];
    }
}

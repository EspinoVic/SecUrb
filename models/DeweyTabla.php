<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deweytabla".
 *
 * @property int $ID
 * @property string $Name
 */
class DeweyTabla extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deweytabla';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Name'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
        ];
    }
}

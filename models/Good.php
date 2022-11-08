<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'good';
    }

}
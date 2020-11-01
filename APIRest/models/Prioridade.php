<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prioridades".
 *
 * @property integer $id
 * @property string $nome
 */
class Prioridade extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'prioridades';
    }

    public function rules()
    {
        return [
            [['prioridade'], 'required'],
            [['prioridade'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prioridade' => 'Prioridade',
        ];
    }
}

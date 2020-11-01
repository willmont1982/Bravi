<?php

namespace app\models;

use Yii;
use app\models\Prioridade;

/**
 * This is the model class for table "tarefas".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $descricao
 * @property integer $prioridade_id
 */
class Tarefa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarefas';
    }

    public function rules()
    {
        return [
            [['titulo', 'descricao', 'prioridade_id'], 'required'],
            [['descricao'], 'string'],
            [['prioridade_id'], 'integer'],
            [['titulo'], 'string', 'max' => 255],
        ];
    }
    
    public function getPrioridade()
    {
        return $this->hasOne(Prioridade::className(), ['id' => 'prioridade_id']);                        
    }
    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descricao' => 'Descricao',
            'prioridade_id' => 'Prioridade',
        ];
    }
    
    public function fields()
    {
        return [
            'id',
            'titulo',
            'descricao',
            'prioridade_id' => 'prioridade'
        ];     
    }
}

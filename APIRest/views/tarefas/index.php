<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \yii\helpers\ArrayHelper;
use \app\models\Prioridade;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TarefasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tarefas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarefas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'titulo',
            [
              'attribute' => 'prioridade_id',
              'value' => 'prioridade.prioridade',
              'filter' => Html::activeDropDownList($searchModel, 'prioridade_id', 
                      ArrayHelper::map(Prioridade::find()->asArray()->all(), 'id', 'prioridade'),
                      ['class' =>'form-control','prompt' => 'Selecione a Prioridade'])
            ],
            ['class' => 'yii\grid\ActionColumn','template' => '{update} {delete}']
        ],
    ]); ?>
</div>

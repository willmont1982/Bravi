<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tarefas */

$this->title = 'Alterar Tarefa: ' . $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Tarefas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="tarefas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'prioridades' => $prioridades
    ]) ?>

</div>

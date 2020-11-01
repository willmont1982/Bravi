<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tarefas */

$this->title = 'Adicionar Tarefas';
$this->params['breadcrumbs'][] = ['label' => 'Tarefas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarefas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'prioridades'=> $prioridades
    ]) ?>

</div>

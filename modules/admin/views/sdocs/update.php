<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sdocs */

$this->title = 'Update Sdocs: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sdocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sdocs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

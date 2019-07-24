<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Qreports */

$this->title = 'Create Qreports';
$this->params['breadcrumbs'][] = ['label' => 'Qreports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qreports-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

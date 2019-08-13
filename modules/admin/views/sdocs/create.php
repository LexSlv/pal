<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sdocs */

$this->title = 'Добавить документ';
$this->params['breadcrumbs'][] = ['label' => 'Sdocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdocs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Bills;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

        <?php

        $bill = Bills::find()
            ->where(['user_id'=>$model->id])
            ->andWhere(['status'=>0])
            ->orderBy([
                'id' => SORT_DESC
                ])
            ->asArray()
            ->one();


        ?>
        <div style="float:right; margin-top: -45px;">
        <?php if(isset($bill['id'])): ?>
            <a  href="/admin/bills/update?id=<?= $bill['id'] ?>" class="btn btn-success">Редктировать имеющийся счёт</a>
        <?php endif; ?>

        <a href="/admin/bills/create?user_id=<?= $model->id ?>" class="btn btn-primary">Выписать новый счёт</a>
        </div>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'regDate',
            'bornDate',
            'firstName',
            'middleName',
            'lastName',
            'certificateNumber',
            'email:email',
            'status',
        ],
    ]) ?>

</div>

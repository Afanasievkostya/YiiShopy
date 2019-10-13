<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = 'Update Order: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order order-update">
  <div class="order-head">
    <h1>Редактирование заказа №<?= $model->id ?></h1>
  </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

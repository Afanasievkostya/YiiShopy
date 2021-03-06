<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = 'Create Order';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order order-create">
  <div class="order-head">
    <h1><?= Html::encode($this->title) ?></h1>
  </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

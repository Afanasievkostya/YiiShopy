<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = 'Create Product';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order product-create">
  <div class="order-head">
    <h1><?= Html::encode($this->title) ?></h1>
  </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

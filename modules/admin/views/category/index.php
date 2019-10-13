<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order category-index">
  <div class="order-head">
    <h1><?= Html::encode($this->title) ?></h1>
  </div>
    <p class="order-button">
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
          //  'parent_id',
            [
                'attribute' => 'parent_id',
                'value' => function($data){
                    return $data->category->name ? $data->category->name : 'Самостоятельная категория';
                },
            ],
            'name',
            'keywords',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

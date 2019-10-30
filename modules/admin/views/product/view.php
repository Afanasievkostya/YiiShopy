<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order product-view">
  <div class="order-head">
    <h1><?= Html::encode($this->title) ?></h1>
  </div>
    <p class="order-button">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $image = $model->getImage(); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'category_id',
            [
                'attribute' => 'category_id',
                'value' => $model->category->name ? $model->category->name : 'Самостоятельная категория',

            ],
            'name',
            'content:html',
            'price',
            'keywords',
            'description',
            [
                'attribute' => 'image',
                'value' => "<img src='{$image->getUrl()}'>",
                'format' => 'html',
            ],

          //'new',
            [
                'attribute' => 'new',
                'value' => function($data){
                    return $model->category->new ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
        ],
    ]) ?>
    <div class="gallery">
      <p class="gallery-text" style="font-weight: 700; color: #000; margin-left: 15px;">Галерея</p>
       <div class="gallery-img" style="padding-left: 150px;">
      <?php $gallery = $model->getImages();
        foreach($gallery as $file){
            echo "<img src='{$file->getUrl()}'>";
        }
      ?>
      </div>
  </div>
</div>

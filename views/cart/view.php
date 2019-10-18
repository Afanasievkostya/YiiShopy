<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<div class="container">
  <section class="order">
  <div class="top-headr">
     <h2><span>Ваш заказ</span></h2>
  </div>
  <div class="suc" >
  <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>

    <?php if( Yii::$app->session->hasFlash('error') ): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif;?>
    </div>
  <?php if (!empty($session['cart'])): ?>
    <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">Фото</th>
        <th scope="col">Наименование</th>
        <th scope="col">Кол-во</th>
        <th scope="col">Цена</th>
        <th scope="col">Сумма</th>
        <th><span><i class="fas fa-times"></i></span></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($session['cart'] as $id => $item): ?>
      <tr>
        <td scope="row"><?= \yii\helpers\Html::img("@web/img/{$item['img']}", ['alt' => $item['name'], 'height' => 50]) ?></td>
        <td><a href="<?= Url::to(['product/view', 'id' => $id])?>"><?= $item['name']?></a></td>
        <td><?= $item['qty'] ?></td>
        <td><?= $item['price'] ?>$</td>
        <td><?= $item['qty'] * $item['price']?>$</td>
        <td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"><i class="fas fa-times"></i></span></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td scope="row">Итого: </td>
      <td><?= $session['cart.qty'] ?></td>
    </tr>
    <tr>
      <td scope="row">На сумму: </td>
      <td><?= $session['cart.sum'] ?> $</td>
    </tr>
    </tbody>
  </table>
  <hr/>
        <?php $form = ActiveForm::begin()?>
        <?= $form->field($order, 'name')?>
        <?= $form->field($order, 'email')?>
        <?= $form->field($order, 'phone')?>
        <?= $form->field($order, 'address')?>
        <?= Html::submitButton('Заказать', ['class' => 'btn btn-success'])?>
        <?php ActiveForm::end()?>
  <?php else: ?>
    <h3>Корзина пуста!</h3>
  <?php endif; ?>
</section>
</div>

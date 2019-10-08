<?php if(!empty($session['cart'])): ?>
  <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">Фото</th>
      <th scope="col">Наименование</th>
      <th scope="col">Кол-во</th>
      <th scope="col">Цена</th>
      <th><span><i class="fas fa-times"></i></span></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($session['cart'] as $id => $item): ?>
    <tr>
      <td scope="row"><?= \yii\helpers\Html::img("@web/{$item['img']}", ['alt' => $item['name'], 'height' => 50]) ?></td>
      <td><?= $item['name'] ?></td>
      <td><?= $item['qty'] ?></td>
      <td><?= $item['price'] ?></td>
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
<?php else: ?>
  <h3>Корзина пуста!</h3>
<?php endif; ?>

<?php

namespace app\controllers;
use app\models\Category;
use app\models\Products;
use Yii;


class ProductController extends AppController {
  public function actionView($id){
    //  $id = Yii::$app->request->get('id'); //есть уже ($id)
      $product = Products::findOne($id); // ленивая загрузка

      if(empty($product))
         throw new \yii\web\HttpException(404, 'Такого товара нет!'); // сообщение щб ошибке

//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one(); // жадная
     $news = Products::find()->where(['new' => '1'])->limit(8)->all();
     $this->setMeta('YiiShopy | ' . $product->name, $product->keywords, $product->description);
      return $this->render('view', compact('product', 'news'));
  }
}

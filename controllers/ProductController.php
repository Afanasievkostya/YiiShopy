<?php

namespace app\controllers;
use app\models\category;
use app\models\products;
use Yii;


class ProductController extends AppController {
  public function actionView($id){
      $id = Yii::$app->request->get('id');
      $product = Products::findOne($id); // ленивая загрузка
//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one(); // жадная
     $news = Products::find()->where(['new' => '1'])->limit(8)->all();
      return $this->render('view', compact('product', 'news'));
  }
}

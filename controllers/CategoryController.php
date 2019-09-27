<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\category;
use app\models\products;
use Yii;


class CategoryController extends Controller {
      public function actionProduct() {
        $news = Products::find()->where(['new' => '1'])->limit(4)->all();
        return $this->render('product', compact('news'));
    }
}

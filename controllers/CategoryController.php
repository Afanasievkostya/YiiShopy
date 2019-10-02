<?php

namespace app\controllers;
use app\models\category;
use app\models\products;
use yii\data\Pagination;
use Yii;


class CategoryController extends AppController {
      public function actionProduct() {
      //  $news = Products::find()->where(['new' => '1'])->limit(4)->all();
        $query = Products::find()->where(['new' => '1']);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $news = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('YiiShopy | products');
        return $this->render('product', compact('news', 'pages'));
    }

    public function actionView($id) {
        //$id = Yii::$app->request->get('id'); //есть уже ($id)
        $category = Category::findOne($id);

        if(empty($category))
           throw new \yii\web\HttpException(404, 'Такой категории нет!'); // сообщение щб ошибке

      //  $products = Products::find()->where(['category_id' => $id])->all();
       $query = Products::find()->where(['category_id' => $id]);
       $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 2, 'forcePageParam' => false, 'pageSizeParam' => false]);
       $products = $query->offset($pages->offset)->limit($pages->limit)->all();

       $this->setMeta('YiiShopy | ' . $category->name, $category->keywords, $category->description);

        return $this->render('view', compact('products', 'pages', 'category'));
   }

   public function actionSearch() {
       $q = Yii::$app->request->get('q');

       $this->setMeta('YiiShopy | Поиск: ' . $q);

        if(!$q)
           return $this->render('search');
           
       $query = Products::find()->where(['like', 'name', $q]);
       $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 2, 'forcePageParam' => false, 'pageSizeParam' => false]);
       $products = $query->offset($pages->offset)->limit($pages->limit)->all();

       return $this->render('search', compact('products', 'pages', 'q'));
   }



}

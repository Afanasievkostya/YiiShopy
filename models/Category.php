<?php

namespace app\models;
use yii\db\ActiveRecord;

Class Category extends ActiveRecord {

  public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName() {
        return 'category';
    }

    public function getProducts() {
       return  $this->hasMany(Products::className(), ['category_id' => 'id']);
    }

}

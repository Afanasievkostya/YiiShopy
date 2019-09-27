<?php

namespace app\models;
use yii\db\ActiveRecord;

Class Category extends ActiveRecord {

    public static function tableName() {
        return 'category';
    }

    public function getProducts() {
       return  $this->hasMany(Products::className(), ['category_id' => 'id']);
    }

}

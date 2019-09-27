<?php

namespace app\models;
use yii\db\ActiveRecord;

Class Products extends ActiveRecord {

    public static function tableName() {
        return 'products';
    }

    public function getCategory() {
       return  $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}

<?php

namespace app\modules\admin\models;

use Yii;


/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property double $price
 * @property string $keywords
 * @property string $description
 * @property string $image
 * @property string $new
 */
class Product extends \yii\db\ActiveRecord
{

  public $image; // для одной картинки
  public $gallery; // для несколько картинок

  public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'name'], 'required'],
            [['category_id'], 'integer'],
            [['price'], 'number'],
            [['new', 'content'], 'string'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'], // для одной картинки
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID товара',
            'category_id' => 'Категория',
            'name' => 'Наименование',
            'price' => 'Цена',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описание',
            'image' => 'Фото',
            'gallery' => 'Галерея',
            'new' => 'Новинка',
            'content' => 'Контент',
        ];
    }

    // для одной картинки

    public function upload(){
       if($this->validate()){
           $path = 'images/store/' . $this->image->baseName . '.' . $this->image->extension;
           $this->image->saveAs($path);
           $this->attachImage($path, true);
           @unlink($path);
           return true;
       }else{
           return false;
       }
   }

   // загрузка нескольких картинок

   public function uploadGallery(){
       if($this->validate()){
           foreach($this->gallery as $file){
               $path = 'images/store/' . $file->baseName . '.' . $file->extension;
               $file->saveAs($path);
               $this->attachImage($path);
               @unlink($path);
           }
           return true;
       }else{
           return false;
       }
   }

}

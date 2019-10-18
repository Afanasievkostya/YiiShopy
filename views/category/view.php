<?php
   /* @var $this yii\web\View */
   use yii\helpers\Html;
   ?>
<div class="page-products">
   <div class="container">
      <section class="products">
         <div class="top-headr">
            <h2><span><?= $category->name?></span></h2>
         </div>
         <div class="row row-products">
            <div class="col-products col-xl-3">
               <div class="categories navbar-expand-xl">
                  <a href="#" class="title-product navbar-toggler" data-toggle="collapse" data-target="#navbarTogglerDemo01">Categories</a>
                  <h2 class="title-product title-product--active">Categories</h2>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                     <ul class="categories-sheps mr-auto">
                        <?= \app\components\MenuWidget::Widget(['tpl' => 'menu']); ?>
                     </ul>
                  </div>
               </div>
               <!--size-product-->
               <div class="size-product navbar-expand-xl">
                  <a href="#" class="title-product navbar-toggler" data-toggle="collapse" data-target="#navbarTogglerDemo02">Sizes</a>
                  <h2 class="title-product title-product--active">Sizes</h2>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                     <ul class="mr-auto mt-2 mt-lg-0">
                        <li class="size-item custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="customCheck1"><label class="custom-control-label" for="customCheck1">Small</label></li>
                        <li class="size-item custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="customCheck2"><label class="custom-control-label" for="customCheck2">Midum</label></li>
                        <li class="size-item custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="customCheck3"><label class="custom-control-label" for="customCheck3">Larg</label></li>
                        <li class="size-item custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="customCheck4"><label class="custom-control-label" for="customCheck4">X Larg</label></li>
                     </ul>
                  </div>
               </div>
               <!--brand-product-->
               <div class="brand-product navbar-expand-xl">
                  <a href="#" class="title-product navbar-toggler" data-toggle="collapse" data-target="#navbarTogglerDemo03">Brands</a>
                  <h2 class="title-product title-product--active">Brands</h2>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                     <ul class="mr-auto mt-2 mt-lg-0">
                        <li class="brand-item custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="customCheck5"><label class="custom-control-label" for="customCheck5">Reebok</label></li>
                        <li class="brand-item custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="customCheck6"><label class="custom-control-label" for="customCheck6">Addidas</label></li>
                        <li class="brand-item custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="customCheck7"><label class="custom-control-label" for="customCheck7">Nike</label></li>
                        <li class="brand-item custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="customCheck8"><label class="custom-control-label" for="customCheck8">Active</label></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-products col-xl-9">
               <div class="new-arrivals">
                  <?php if( !empty($products) ): ?>
                  <div class="row card-deck">
                     <?php foreach ($products as $product): ?>
                     <div class="col arrivals-col col-12 col-sm-6 col-lg-6">
                        <div class="card arrivals-card" tabindex="0">
                           <div class="card-face">
                              <div class="card-image">
                                 <?= Html::img("@web/img/{$product->image}", ['class' => 'card-img-top', 'alt' => $product->name])?>
                              </div>
                              <div class="card-body">
                                 <h5 class="card-title"><?= $product->name?></h5>
                                 <div class="text-muted">
                                    <p><?= $product->price?> $</p>
                                 </div>
                              </div>
                           </div>
                           <div class="card-active">
                              <div class="card-image">
                                 <?= Html::img("@web/img/{$product->image}", ['class' => 'card-img-top', 'alt' => $product->name])?>
                              </div>
                              <div class="card-title">
                                 <h5 class="card-title--text"><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $product->id]) ?>"><?= $product->name?></a></h5>
                              </div>
                              <form class="form card-body" id="cardForm" action="index.php" method="post" enctype="multipart/form-data">
                                 <div class="form_item card-text--size">
                                    <p>sizes:</p>
                                    <ul class="arrivals-size">
                                       <li class="arrivals-size--item"><input type="checkbox" id="<?= 's' . $product->id?>" name="size" value="s"><label for="<?= 's' . $product->id?>" tabindex="0">s</label></li>
                                       <li class="arrivals-size--item"><input type="checkbox" id="<?= 'm' . $product->id?>" name="size" value="m"><label for="<?= 'm' . $product->id?>">m</label></li>
                                       <li class="arrivals-size--item"><input type="checkbox" id="<?= 'l' . $product->id?>" name="size" value="l"><label for="<?= 'l' . $product->id?>">l</label></li>
                                       <li class="arrivals-size--item"><input type="checkbox" id="<?= 'xl' . $product->id?>" name="size" value="xl"><label for="<?= 'xl' . $product->id?>">xl</label>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="form_item text-color">
                                    <ul class="arrivals-color">
                                       <li class="arrivals-color--item"><input type="checkbox" id="<?= 'red' . $product->id?>" name="color" value="#e12e3f"><label for="<?= 'red' . $product->id?>" tabindex="0"></label></li>
                                       <li class="arrivals-color--item"><input type="checkbox" id="<?= 'gray' . $product->id?>" name="color" value="#34404b"><label for="<?= 'gray' . $product->id?>"></label>
                                       </li>
                                       <li class="arrivals-color--item"><input type="checkbox" id="<?= 'blue' . $product->id?>" name="color" value="#3ab3ff"><label for="<?= 'blue' . $product->id?>"></label>
                                       </li>
                                       <li class="arrivals-color--item"><input type="checkbox" id="<?= 'green' . $product->id?>" name="color" value="#2fd967"><label for="<?= 'green' . $product->id?>"></label>
                                       </li>
                                    </ul>
                                 </div>
                              </form>
                              <div class="text-muted">
                                 <ul class="arrivals-icon">
                                    <li><a href="#"><img src="/img/Share.png" alt=""></a>
                                    </li>
                                    <li>
                                       <a class="arrivals-icon--submit add-to-cart" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $product->id]) ?>" data-id="<?= $product->id?>"><img src="/img/Add-Cart.png" style="width: 23px; height: 23px;"></a>
                                    </li>
                                    <li><a class="arrivals-icon--fav" href="#"><img src="/img/Like.png" alt=""></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php endforeach; ?>
                  </div>
                  <div class="pagination-wrap">
                <?php
                 echo \yii\widgets\LinkPager::widget([
                'pagination' => $pages,]);
                ?>
              </div>
                  <?php else :?>
                  <div class="top-headr--error">
                  <h2 class="top-headr--error__text">Здесь товаров пока нет.</h2>
                   </div>
                   <?php endif; ?>
                  </div>
            </div>
         </div>
      </section>
      <section class="news-letter">
         <div class="row letter">
            <div class="col letter-title col-12 col-md-12  col-lg-7">
               <h5>NEWS LETTER</h5>
               <p>join us now to get all news and special offers</p>
            </div>
            <div class="col col-12 col-sm-6 col-lg-3"><img src="/img/Mail.png" alt="почта"><span class="letter-span">type your email here</span></div>
            <div class="col letter-button col-12 col-sm-6 col-lg-2">
               <button type="button" class="btn btn-warning">join us </button>
            </div>
         </div>
      </section>
   </div>
</div>

<?php
   /* @var $this yii\web\View */
   use yii\helpers\Html;
   ?>

<div class="page-productShow">
         <section class="productShow">
            <div class="container">
               <div class="row">
                  <div class="col col-sm-12 col-xl-5">
                     <div class="gallery-box">
                        <div class="view">
                           <div class="big-image">
                           <?= Html::img("@web/{$product->image}", ['alt' => $products->name])?>
                        </div>
                        <div class="thumbnails">
                           <a href="images/img1.jpg" class="wrap-img"><img src="/img/no-image.png" alt="Product5-2"></a>
                           <a href="images/img2.jpg" class="wrap-img"><img src="/img/no-image.png" alt="Product5-3"></a>
                           <a href="images/img3.jpg" class="wrap-img active">
                           <?= Html::img("@web/{$product->image}", ['alt' => $products->name])?>
                           </a>
                        </div>
                     </div>
                  </div>
                   </div>
                  <div class="col col-sm-12 col-xl-7">
                     <div class="top-headr">
                        <h2><span>FULL WINTER KIT</span></h2>
                        <p class="productShow--text featured-full--text__top"><?= $product->name?></p>
                        <p class="productShow--text__bottom  featured-full--text__bottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                           Lorem Ipsum is simply dummy text of the printingand typesetting industry
                        </p>
                     </div>
                     <form action="#">
                        <div class="wrap-top">
                           <div class="size-product">
                              <ul class="arrivals-size">
                                 <li class=" featured-full--item">
                                    <p class="size-product--text">Choos Size:</p>
                                 </li>
                                 <li class="arrivals-size--item active"><input type="radio" id="s" name="size" value="s"><label for="s">s</label></li>
                                 <li class="arrivals-size--item">-</li>
                                 <li class="arrivals-size--item"><input type="radio" id="m" name="size" value="m"><label for="m">m</label></li>
                                 <li class="arrivals-size--item">-</li>
                                 <li class="arrivals-size--item"><input type="radio" id="l" name="size" value="l"><label for="l">l</label></li>
                                 <li class="arrivals-size--item">-</li>
                                 <li class="arrivals-size--item"><input type="radio" id="xl" name="size" value="xl"><label for="xl">xl</label></li>
                              </ul>
                           </div>
                           <div class="number-product">
                              <div class="num">
                                 <p class="size-product--text">Choos Quantity:</p>
                                 <div class="counter">
                                     <span class="next" style="font-size: 12px;"><i class="fas fa-plus"></i></span>
                                     <input type="text" id="qty" value="1">
                                     <span class="rev" style="font-size: 12px;"><i class="fas fa-minus"></i></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="wrap-bottom">
                           <div class="price-product featured-full--item">
                              <p>Price: <?= $product->price?>$</p>
                           </div>
                           <div class="submit-product">
                              <ul class="muted-icon">
                                 <li class="submit-item"><a href="#"><img src="/img/Share.png" alt=""></a></li>
                                 <li class="submit-item">
                                    <a class="arrivals-icon--submit add-to-cart" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $product->id]) ?>" data-id="<?= $product->id?>"><img src="/img/Add-Cart.png" alt=""></a>
                                 </li>
                                 <li class="submit-item"><a href="#"><img src="/img/Like.png" alt=""></a></li>
                                 <li class="submit-item"><input class="btn btn-primary" type="submit" value="Order Now"></li>
                              </ul>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
         <div class="container">
            <section class="related-products">
               <div class="top-headr">
                  <h2><span>RELATED</span> PRODUCTS</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <?php $count = count($news); $i = 0; foreach($news as $new): ?>
    <?php if($i % 4 == 0): ?>

        <div class="carousel-item <?php if($i == 0) echo 'active' ?>">

    <?php endif; ?>


        <div class="card carousel-card" tabindex="0">
           <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $new->id]) ?>" class="carousel-image">
              <?= Html::img("@web/{$new->image}", ['class' => 'card-img-top', 'alt' => $new->name])?>
              <h5 class="card-title"><?= $new->name?></h5>
           </a>
          <div class="card-body">
              <div class="text-muted carousel-muted">
                 <p><?= $new->price?>$</p>
              </div>
       </div>
     </div>


<?php $i++; if($i % 4 == 0 || $i == $count): ?>

</div>

<?php endif; ?>

<?php endforeach; ?>

    </div>

  <div class="carousel-control--wrap">
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span style="font-size: 32px; color: #ff5912;"><i class="fas fa-angle-left"></i></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span style="font-size: 32px; color: #ff5912;"><i class="fas fa-angle-right"></i></span>
  </a>
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

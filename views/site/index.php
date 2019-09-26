<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="page-main">
<section class="featured">
<div class="container">
    <div class="featured-full">
       <h1 class="pagetitle"><?= $pagetitle; ?></h1>
       <p class="featured-full--text__top">Half Jacket + Skiny Trousers + Boot leather</p>
       <p class="featured-full--text__bottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
       <ul class="featured-full--swither">
          <li class="featured-full--item">Price: 120$</li>
           <li class="featured-full--item"><a href="#"><img src="/img/Cart.png" alt="карзина"><span class="featured-full--text__cart">Order Now</span></a></li>
       </ul>
    </div>
 </div>
</section>
<!--******************-->
<div class="container">
<section class="new-arrivals">
   <div class="top-headr">
      <h2><span>NEW</span> ARRIVALS</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
   </div>
   <div class="row card-deck">

  <div class="col arrivals-col col-12 col-sm-6 col-lg-3">
     <div class="card arrivals-card" tabindex="0">
        <div class="card-face">
           <div class="card-image">
              <img src="/img/product1.png" class="card-img-top" alt="">
           </div>
           <div class="card-body">
              <h5 class="card-title">Reebok Track Jacket1</h5>
              <div class="text-muted">
                 <p>100$</p>
              </div>
           </div>
        </div>
        <div class="card-active">
           <!-- блок image -->
           <div class="card-image">
              <img src="/img/product1.png" class="card-img-top" alt="">
           </div>
           <!-- блок name -->
           <div class="card-title">
              <h5 class="card-title--text">Reebok Track Jacket1</h5>
           </div>
           <!--форма определения размера и цвета товара-->
           <form class="form card-body" id="cardForm" action="index.php" method="post" enctype="multipart/form-data">
              <!--блок size-->
              <div class="form_item card-text--size">
                 <p>sizes:</p>
                 <?php
                    $id = isset($card['id']) ? $card['id'] : '';
                    ?>
                 <ul class="arrivals-size">
                    <?php
                       $value = isset($carts['size']) ? $carts['size'] : '';
                       ?>
                    <li class="arrivals-size--item"><input type="checkbox" id="<?= 's' . $id; ?>" name="size" value="s"><label for="<?= 's' . $id; ?>" tabindex="0">s</label></li>
                    <?php
                       $value = isset($carts['size']) ? $carts['size'] : '';
                       ?>
                    <li class="arrivals-size--item"><input type="checkbox" id="<?= 'm' . $id; ?>" name="size" value="m"><label for="<?= 'm' . $id; ?>">m</label></li>
                    <?php
                       $value = isset($carts['size']) ? $carts['size'] : '';
                       ?>
                    <li class="arrivals-size--item"><input type="checkbox" id="<?= 'l' . $id; ?>" name="size" value="l"><label for="<?= 'l' . $id; ?>">l</label></li>
                    <?php
                       $value = isset($carts['size']) ? $carts['size'] : '';
                       ?>
                    <li class="arrivals-size--item"><input type="checkbox" id="<?= 'xl' . $id; ?>" name="size" value="xl"><label for="<?= 'xl' . $id; ?>">xl</label>
                    </li>
                 </ul>
              </div>
              <!--блок color-->
              <div class="form_item text-color">
                 <?php
                    $id = isset($card['id']) ? $card['id'] : '';
                    ?>
                 <ul class="arrivals-color">
                    <?php
                       $value = isset($carts['color']) ? $carts['color'] : '';
                       ?>
                    <li class="arrivals-color--item"><input type="checkbox" id="<?= 'red' . $id; ?>" name="color" value="#e12e3f"><label for="<?= 'red' . $id; ?>" tabindex="0"></label></li>
                    <?php
                       $value = isset($carts['color']) ? $carts['color'] : '';
                       ?>
                    <li class="arrivals-color--item"><input type="checkbox" id="<?= 'gray' . $id; ?>" name="color" value="#34404b"><label for="<?= 'gray' . $id; ?>"></label>
                    </li>
                    <?php
                       $value = isset($carts['color']) ? $carts['color'] : '';
                       ?>
                    <li class="arrivals-color--item"><input type="checkbox" id="<?= 'blue' . $id; ?>" name="color" value="#3ab3ff"><label for="<?= 'blue' . $id; ?>"></label>
                    </li>
                    <?php
                       $value = isset($carts['color']) ? $carts['color'] : '';
                       ?>
                    <li class="arrivals-color--item"><input type="checkbox" id="<?= 'green' . $id; ?>" name="color" value="#2fd967"><label for="<?= 'green' . $id; ?>"></label>
                    </li>
                 </ul>
              </div>
              </form>
              <div class="text-muted">
                 <ul class="arrivals-icon">
                    <li><a href="#"><img src="/img/Share.png" alt=""></a>
                    </li>
                    <li>
                       <a class="arrivals-icon--submit" id="clickForm" href="/index.php?id=<?=$card['id']; ?>"><img src="img/Add-Cart.png" style="width: 23px; height: 23px;"></a>
                    </li>
                    <li><a class="arrivals-icon--fav" href="/favourites.php?id=<?=$card['id']; ?>"><img src="/img/Like.png" alt=""></a>
                    </li>
                 </ul>
              </div>

        </div>
     </div>
  </div>

</div>
   </div>
   </section>
 
   <!--**************-->
   <div class="container">
    <section class="not-dial">
       <div class="row dial">
          <div class="col col-3 col-sm-6 col-md-6 col-lg-2 col-xl-2">
             <div class="dial-logo">
                <p>Sale</p>
                <p>50%</p>
             </div>
          </div>
          <div class="col col-9 col-sm-6 col-md-6 col-lg-4 col-xl-3">
             <div class="dial-text">
                <h4>FULL WINTER KIT</h4>
                <p>Half Jacket + Skiny Trousers + Boot leather</p>
             </div>
          </div>
          <div class="col col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
             <ul class="dial-prace">
                 <li><a href="#"><img src="img/Add-Cart.png" alt="карзина"></a></li>
                <li class="prace-text">120<span style="font-size: 14px;"><i class="fas fa-dollar-sign"></i></span></li>
             </ul>
          </div>
          <div class="col col-6 col-sm-6 col-md-6 col-lg-2 col-xl-3">
             <ul class="dial-size">
                <li>
                   <h5>adv <span>area</span></h5>
                </li>
                <li class="dial-size--text">
                   <p>470 &#215; 100</p>
                </li>
             </ul>
          </div>
       </div>
    </section>
  </div>
    <!--***************-->
    <div class="container">
   <section class="best-sales">
               <div class="top-headr">
                  <h2><span>BEST</span> SALES</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
               </div>
               <div class="row card-deck">

           <div class="col col-12 col-md-6 col-xl-4">
              <div class="card mb-3" style="max-width: 540px;">
                 <div class="row no-gutters">
                    <div class="col-md-4">
                       <div class="card-image">
                          <img src="/img/product4.png" class="bestCard-img" alt="">
                       </div>
                    </div>
                    <div class="col-md-8">
                       <div class="card-body card-body__desk">
                          <h5 class="card-title card-title--sales">Reebok Track Jacket4</h5>
                          <button class="card-text card-text--sales">
                            <small class="text-muted text-muted__star">
                             <span class="wrapper-muted">
                             <span style="color:  #f55d43;"><i class="fas fa-star"></i></span><span style="color:  #f55d43;"><i class="fas fa-star"></i></span><span style="color:  #f55d43;"><i class="fas fa-star"></i></span>
                             </span>
                             <span class="text-muted--sum">100 $</span>
                             </small>
                              <small class="text-muted__cart"><a href=""><img src="/img/Add-Cart.png" alt=""><span class="text-muted--add">add to cart</span></a>
                             </small>
                          </button>
                       </div>
                    </div>
                 </div>
              </div>
           </div>

         </div>
    </section>
  </div>
    <!--**************-->
    <div class="container">
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

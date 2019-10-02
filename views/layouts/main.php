<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
   <head>
     <meta charset="<?= Yii::$app->charset ?>">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <?= Html::csrfMetaTags() ?>
     <title><?= Html::encode($this->title) ?></title>
      <?php $this->head() ?>
   </head>
   <body>
     <?php $this->beginBody() ?>
      <header>
         <div class="container">
            <nav class="nav-top">
               <ul class="nav-top--left">
                  <li class="nav-item">
                     <div class="mail"><img src="/img/Mail.png" alt="mail"><span class="mail-text">info@shopy.com</span></div>
                  </li>
                  <li class="nav-item">
                     <div class="tel"><img src="/img/Phone.png" alt="tel"><span class="tel-text">453-5553-996</span></div>
                  </li>
               </ul>
               <div class="nav-social">
                  <ul class="social">
                     <li class="nav-item">
                        <a class="nav-link" href="https://facebook.com"><span style="font-size: 14px; color: #46505a;"><i class="fab fa-facebook-f"></i></span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com"><span style="font-size: 14px; color: #46505a;"><i class="fab fa-twitter"></i></span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://plus.google.com"><span style="font-size: 14px; color: #46505a;"><i class="fab fa-google-plus-g"></i></span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com"><span style="font-size: 14px; color: #46505a;"><i class="fab fa-instagram"></i></span></a>
                     </li>
                  </ul>
               </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light">
               <a class="navbar-brand" href="index.php">
                  <div class="navbar-logo">
                    <?= Html::a('<p class="navbar-logo--text1">SH<img src="/img/Ellipse.png" width="34" height="17" alt="logo">PY</p><p class="navbar-logo--text2">shope any where</p>', ['site/index'], ['class'=>'nav-link'])?>
                  </div>
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <?= Html::a('Home', ['site/index'], ['class'=>'nav-link'])?>
                     </li>
                     <li class="nav-item">
                        <?= Html::a('Products', ['category/product'], ['class'=>'nav-link'])?>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Hot Deals</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                     </li>
                  </ul>
                  <ul class="nav-right">
                     <li class="nav-right--item">
                        <div class="dropdown">
                           <button type="button" class="btn btn-fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span style="font-size: 1.2rem; color: #46505a;"><i class="fas fa-search"></i></span>
                           </button>
                           <div class="dropdown-menu dropdown-menu-right">
                              <form class="form-inline my-2 my-lg-0" method="get" action="<?= \yii\helpers\Url::to(['category/search'])?>">
                                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
                                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                              </form>
                           </div>
                        </div>
                     </li>
                     <li class="nav-right--item"><a href="#"><img src="/img/User.png" alt="вход"></a></li>
                     <li class="nav-right--item">
                     <a href="/favourites.php?="><img src="/img/Like.png" alt=""></a>
                      </li>
                     <li class="nav-right--item nav-right--item__prace">
                        <div class="cart-prace">
                          <?php if ($carts && count($carts)): ?>
                           <p><?= $sum; ?></p>
                          <?php endif; ?>
                        </div>
                        <a href="cart.php?="><img src="/img/Cart.png" alt="карзина"></a>

                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         </header>
      <main>
          <?= $content ?>
        </main>
      <footer>
         <div class="container">
            <div class="row footer-row">
               <div class="col col-12 col-md-5 col-lg-4">
                     <div class="navbar-logo">
                        <?= Html::a('<p class="navbar-logo--text1">SH<img src="/img/Ellipse.png" width="34" height="17" alt="logo">PY</p><p class="navbar-logo--text2">shope any where</p>', ['site/index'], ['class'=>'nav-link'])?>
                     </div>
                  <p class="navbar-brand--bottom">shopy c 2015 . your copy right here</p>
               </div>
               <div class="col col-6 col-md-3 col-lg-3 col-xl-2 footer-center">
                  <ul>
                     <li><a class="active" href="#">about us</a></li>
                     <li><a href="#">contact us</a></li>
                     <li><a href="#">support</a></li>
                  </ul>
               </div>
               <div class="col col-6 col-md-4 col-lg-3 col-xl-2 footer-center">
                  <ul>
                     <li><a href="#">our feed</a></li>
                     <li><a href="#">terms and conditions</a></li>
                     <li><a href="#">our privacy</a></li>
                  </ul>
               </div>
               <div class="col col-12 col-md-6 col-lg-2 footer-center">
                  <ul>
                     <li><a href="#">join us</a></li>
                     <li><a href="#">live support</a></li>
                  </ul>
               </div>
               <div class="col col-12 col-md-6 col-lg-6 col-xl-2">
                  <h5>Payment Methods</h5>
                  <img src="/img/Payment.png" alt="social">
               </div>
            </div>
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <?php $this->endBody() ?>
   </body>
</html>
<?php $this->endPage() ?>

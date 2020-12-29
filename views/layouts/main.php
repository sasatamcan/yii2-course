<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- header -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="full">
                    <a class="logo" href="index.html"><img src="/web/images/logo.png" alt="#" /></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="full">
                    <div class="right_header_info">
                        <ul>
                            <li class="dinone">Contact Us : <img style="margin-right: 15px;margin-left: 15px;" src="/web/images/phone_icon.png" alt="#"><a href="#">987-654-3210</a></li>
                            <li class="dinone"><img style="margin-right: 15px;" src="/web/images/mail_icon.png" alt="#"><a href="#">demo@gmail.com</a></li>
                            <li class="button_user">
                                <a href="#" onclick="openOrder(event)">Basket <span class="menu-total-quantity">(<?=$_SESSION['order.totalQuantity']?$_SESSION['order.totalQuantity']: 0 ?>)</span></a>
                            </li>
                            <li class="button_user"><a class="button active" href="#">Login</a><a class="button" href="#">Register</a></li>
                            <li><img style="margin-right: 15px;" src="/web/images/search_icon.png" alt="#"></li>
                            <li>
                                <form action="<?=Url::to(['category/search'])?>" method="get">
                                    <input type="text" placeholder="search" name="search">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

    <?= $content ?>


<!-- footer -->
<fooetr>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-md-12">
                    <h2>Request  A<strong class="white"> Call  Back</strong></h2>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                    <form class="main_form">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Name" type="text" name="Name">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Phone" type="text" name="Phone">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="img-box">
                        <figure><img src="/web/images/img.jpg" alt="img" /></figure>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_logo">
                        <a href="index.html"><img src="/web/images/logo1.jpg" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="lik">
                        <li class="active"> <a href="index.html">Home</a></li>
                        <li> <a href="about.html">About</a></li>
                        <li> <a href="recipe.html">Recipe</a></li>
                        <li> <a href="blog.html">Blog</a></li>
                        <li> <a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="new">
                        <h3>Newsletter</h3>
                        <form class="newtetter">
                            <input class="tetter" placeholder="Your email" type="text" name="Your email">
                            <button class="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
            </div>
        </div>
    </div>
</fooetr>
<!-- end footer -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

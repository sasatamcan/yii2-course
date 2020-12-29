<?php

use yii\helpers\Url;

?>
<?=\app\widgets\MenuWidget::widget()?>
<!-- section -->
    <div class="container">
        <div class="row">
            <? foreach ($goods as $good){ ?>
            <div class="col-md-12">
                <div class="owl-theme">
                    <div class="item">
                        <div class="product_blog_cont">
                            <h4 class="theme_color"><span class="theme_color"></span><?=$good['title'] ?></h4>
                        </div>
                        <div class="product_blog_img">
                            <img src="/web/images/rs1.png" alt="#" />
                        </div>
                        <a href="<?=Url::to(['good/index', 'id'=>$good['id']])?>">Details</a>
                        <a class="order"  data-id="<?=$good['id']?>" href="#">Order Now</a>
                    </div>
                </div>
            </div>
            <? }?>
        </div>
    </div>



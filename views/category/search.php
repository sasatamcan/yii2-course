<h2>Search results on request <?=$search?></h2>
    <div class="container">
        <div class="row">
            <? if($goods) {
                foreach ($goods as $good){ ?>
            <div class="col-md-12">
                <div class="owl-theme">
                    <div class="item">
                        <div class="product_blog_cont">
                            <h4 class="theme_color"><span class="theme_color"></span><?=$good['title'] ?></h4>
                        </div>
                        <div class="product_blog_img">
                            <img src="/web/images/rs1.png" alt="#" />
                        </div>
                    </div>
                </div>
            </div>
            <? }} else {?>
                <p>no results</p>
            <? }?>
        </div>
    </div>



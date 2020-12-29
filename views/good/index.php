<!-- start slider section -->

<div class="slider_section">
    <a href="/" style="color:white">All Goods</a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="slider_cont">
                                            <h3>Details of <?=$good['title']?></h3>
                                            <p><?=$good['desc']?></p>
                                            <p style="color:white"> PRICE <?=$good['price']?> $</p>
                                            <a class="main_bt_border"  data-id="<?=$good['id']?>" href="#">Order Now</a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="slider_image full text_align_center">
                                            <img class="img-responsive" src="/web/images/burger_slide.png" alt="#" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end slider section -->
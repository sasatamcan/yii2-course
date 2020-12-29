<?php
use yii\helpers\Url;
?>
<ul class="list-unstyled components">
    <li >
        <a href="/">All categories</a>
        <? foreach ($data as $item){ ?>
        <a href="<?=Url::to(['category/view', 'id'=>$item['name']])?>"><?=$item['name']?></a>
        <? } ?>
    </li>
</ul>




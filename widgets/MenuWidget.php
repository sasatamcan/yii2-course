<?php


namespace app\widgets;


use app\models\Category;
use app\models\Good;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public $data;

    public function run()
    {
     $categories = new Category();
     $categories = $categories->getAllCategories();
     $this->data = $this->categoryToTemplate($categories);
     return $this->data;
    }

    public function categoryToTemplate($data){
        ob_start();
        include __DIR__.'/template/menu.php';
        return ob_get_clean();
    }

}
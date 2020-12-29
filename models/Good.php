<?php


namespace app\models;


use yii\db\ActiveRecord;
use Yii;

class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods(){
        $goods = Yii::$app->cache->get('goods');
        if(!$goods){
            $goods = Good::find()->asArray()->all();
            Yii::$app->cache->set('goods', $goods, 30);
        }
        return $goods;
    }

    public function getGoodsByCategory($id){
        $goods = Good::find()->where(['category' => $id] )->asArray()->all();
        return $goods;
    }

    public function getSearchResults($search){
        $goods = Good::find()->where(['like', 'title', $search] )->asArray()->all();
        return $goods;
    }

    public function getOneGood($id){
        return Good::find()->where(['id'=>$id])->asArray()->one();
    }


}
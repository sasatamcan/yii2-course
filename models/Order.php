<?php


namespace app\models;


use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public function addToOrder($good){
        $id = (int)$good['id'];

        if (isset($_SESSION['order'][$id] )){
            $_SESSION['order'][$id]['quantity'] +=1;
        }
        else{
            $_SESSION['order'][$id] = [
                'id'=>$id,
                'quantity'=>1,
                'title'=>$good['title'],
                'price'=>$good['price']
            ];
        }

        $price = (int)$good['price'];
        $_SESSION['order.totalQuantity'] = isset($_SESSION['order.totalQuantity']) ? $_SESSION['order.totalQuantity'] +1 : 1;
        $_SESSION['order.sum'] = isset($_SESSION['order.sum']) ? $_SESSION['order.sum'] + $price: $price;
    }

    public function recalcOrder($id){
        $quantity=$_SESSION['order'][$id]['quantity'];
        $price=$_SESSION['order'][$id]['price']*$quantity;
        $_SESSION['order.totalQuantity'] -= $quantity;
        $_SESSION['order.sum'] -= $price;
        unset($_SESSION['order'][$id]);
    }
}
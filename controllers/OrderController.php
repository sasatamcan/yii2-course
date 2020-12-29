<?php


namespace app\controllers;


use app\models\Good;
use app\models\OrderCreated;
use app\models\OrderGood;
use yii\web\Controller;
use app\models\Order;
use Yii;

class OrderController extends Controller
{
    public function actionAdd($id)
    {
        $good =new Good();
        $good = $good->getOneGood($id);
        $session = Yii::$app->session;
        $session->open();
//        $session->remove('order');
        $order = new Order();
        $order->addToOrder($good);
        return $this->renderPartial('order', compact('good', 'session'));
    }

    public function actionOpen()
    {
        $session = Yii::$app->session;
        $session->open();
        return $this->renderPartial('order', compact('session'));
    }

    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('order');
        $session->remove('order.totalQuantity');
        $session->remove('order.sum');
        return $this->renderPartial('order', compact( 'session'));
    }

    public function actionDelete($id)
    {
        $session = Yii::$app->session;
        $session->open();
        $order = new Order();
        $order->recalcOrder($id);
        return $this->renderPartial('order', compact('good', 'session'));
    }

    public function actionCreate()
    {
        $session = Yii::$app->session;
        $session->open();
        $createdOrder = new OrderCreated();
        $this->layout = 'empty_layout';
        if($createdOrder->load(Yii::$app->request->post())){
            $createdOrder->date = date('Y-m-d');
            $createdOrder->sum = $session['order.sum'];
            $createdOrder->status = 'new';
            if($createdOrder->save()){
                Yii::$app->mailer->compose()
                    ->setFrom(['email@address.com'=>'test'])
                    ->setTo('email@address.com')
                    ->setSubject('hello')
                    ->send();

                $session->remove('order');
                $session->remove('order.totalQuantity');
                $session->remove('order.sum');
                return $this->render('success', compact('session'));
            }
        }
        return $this->render('create', compact('createdOrder'));
    }

}
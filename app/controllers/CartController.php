<?php

namespace app\controllers;

use app\models\Cart;
use wfm\App;
/** @property Cart $model */

class CartController extends AppController
{
    public function addAction()
    {
        $lang = App::$app->getProperty('language');
        $id = get('id');
        $qty = get('qty');

        if (!$id){
            return false;
        }

        $product = $this->model->getProduct($id, $lang);
        if (!$product){
           return false;
        }
        $product = $product->fetchAssoc('id');
        $this->model->addToCart($product, $qty, $id);
        $this->loadView('cart_modal');
    }

    public function showAction()
    {
        $this->loadView('cart_modal');
    }

    public function deleteAction()
    {
        $id = get('id');
        if (isset($_SESSION['cart'][$id])){
            $this->model->deleteItem($id);
        }
        $this->loadView('cart_modal');
    }

    public function clearAction()
    {
        if (empty($_SESSION['cart'])){
            return false;
        }else{
            unset($_SESSION['cart']);
            unset($_SESSION['cart.qty']);
            unset($_SESSION['cart.sum']);
        }
        $this->loadView('cart_modal');
    }
}
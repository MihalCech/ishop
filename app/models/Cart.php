<?php

namespace app\models;

use dibi;

class Cart extends AppModel
{
    public function getProduct($id, $lang)
    {
        return dibi::query("SELECT p.*, pd.* FROM product p JOIN product_description pd ON 
    p.id = pd.product_id WHERE p.status = 1 AND p.id = ? AND pd.language_id = ?", $id, $lang['id']);
    }

    public function addToCart($product, $qty = 1, $id)
    {
        $qty = abs($qty);

        if ($product[$id]['is_download'] && isset($_SESSION['cart'][$product[$id]['id']])){
            return false;
        }

        if (isset($_SESSION['cart'][$product[$id]['id']])){
            $_SESSION['cart'][$product[$id]['id']]['qty'] += $qty;
        }else{
            if ($product['is_download']){
                $qty = 1;
            }
            $_SESSION['cart'][$product[$id]['id']] = [
              'title' => $product[$id]['title'],
              'slug' => $product[$id]['slug'],
                'price' => $product[$id]['price'],
                'qty' => $qty,
                'img' => $product[$id]['img'],
                'is_download' =>$product[$id]['is_download']
            ];
        }
        $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ?
            $_SESSION['cart.sum'] + $qty*$product[$id]['price'] : $qty*$product[$id]['price'];
        return true;
    }

    public function deleteItem($id)
    {
        $qty = $_SESSION['cart'][$id]['qty'];
        $sum = $_SESSION['cart'][$id]['qty']*$_SESSION['cart'][$id]['price'];
        $_SESSION['cart.qty'] -= $qty;
        $_SESSION['cart.sum'] -= $sum;
        unset($_SESSION['cart'][$id]);
    }
}
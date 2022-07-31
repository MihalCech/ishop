<?php

namespace app\models;

use dibi;

class Product extends AppModel
{
    public function getProduct($lang, $slug)
    {
        $result = dibi::query("SELECT p.*, pd.* FROM product p JOIN product_description pd ON 
    p.id = pd.product_id WHERE p.status = 1 AND p.slug = ? AND pd.language_id = ?", $slug, $lang['id']);
        return $result->fetchAssoc('id');
    }

    public function getGallery($id)
    {
        $result = dibi::query("SELECT * FROM product_gallery WHERE product_id = ?", $id);
        return $result->fetchAssoc('id');
    }
}
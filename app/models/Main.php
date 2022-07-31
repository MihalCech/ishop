<?php

namespace app\models;

use dibi;

class Main extends AppModel
{
    public function getHits($lang, $limit)
    {
        return dibi::query("SELECT p.*, pd.* FROM product p JOIN product_description pd 
    ON p.id = pd.product_id WHERE p.status = ? AND p.hit = ? AND pd.language_id = ? LIMIT $limit", 1, 1, $lang);
    }
}
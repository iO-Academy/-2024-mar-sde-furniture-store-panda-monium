<?php

class ProductModel
{

    public static function getProductsByCategoryId(PDO $db, int $category_id) : array
    {
        $sql = 'SELECT `price`, `color`, `stock` FROM `products` WHERE `category_id` = :category_id;';
        $query = $db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, ProductEntity::class);
        $query->execute(['category_id'=>$category_id]);
        return $query->fetchAll();
    }
}
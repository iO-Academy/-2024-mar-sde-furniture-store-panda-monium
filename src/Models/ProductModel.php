<?php

class ProductModel
{
    public static function getProductsByCategoryId(PDO $db, int $category_id) : array
    {
        $sql = 'SELECT `price`, `color`, `stock`, `id` FROM `products` WHERE `category_id` = :category_id;';
        $query = $db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, ProductEntity::class);
        $query->execute(['category_id' => $category_id]);
        return $query->fetchAll();
    }

    public static function getIndividualProduct(PDO $db, int $product_id) : ProductEntity
    {
        $sql = 'SELECT `price`, `color`, `stock`, `width`, `height`, `depth`, `related`, `id` FROM `products` WHERE `id` = :product_id;';
        $query = $db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, ProductEntity::class);
        $query->execute(['product_id' => $product_id]);
        return $query->fetch();
    }
}
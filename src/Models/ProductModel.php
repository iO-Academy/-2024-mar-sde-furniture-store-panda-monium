<?php

class ProductModel {
public static function getProducts(PDO $db, int $id) : array
{

    $sql = 'SELECT `price`, `color`, `stock` FROM `products` WHERE `category_id` = :id;';
    $query = $db->prepare($sql);
    $query->setFetchMode(PDO::FETCH_CLASS, ProductsEntity::class);
    $query->execute(['id'=>$id]);
    return $query->fetchAll();
}
}
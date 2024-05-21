<?php

class ProductModel {
public static function getProducts(PDO $db, int $id) : array|null
{
    $sql = 'SELECT `price`, `color`, `stock` FROM `products` WHERE `category_id` =' . $id .';';
    $query = $db->prepare($sql);
//    $query->setFetchMode(PDO::FETCH_CLASS, CategoryEntity::class);
    $query->execute();
    return $query->fetchAll();
}
}
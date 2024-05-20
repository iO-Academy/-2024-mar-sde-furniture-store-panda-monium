<?php

class ProductModel {

public static function getProducts(PDO $db)
{
    $sql = 'SELECT `price`, `color`, `stock` FROM `products` WHERE `id` = 1';
    $query = $db->prepare($sql);
    $query->setFetchMode(PDO::FETCH_CLASS, CategoryEntity::class);
    $query->execute();
    return $query->fetchAll();
}


}
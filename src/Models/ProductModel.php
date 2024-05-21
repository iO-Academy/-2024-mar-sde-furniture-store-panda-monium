<?php

class ProductModel {
public static function getProducts(PDO $db)
{
    $id = $_GET["id"];
    $sql = 'SELECT `price`, `color`, `stock` FROM `products` WHERE `category_id` =' . $id .';';
    $query = $db->prepare($sql);
//    $query->setFetchMode(PDO::FETCH_CLASS, CategoryEntity::class);
    $query->execute();
    return $query->fetchAll();
}


}
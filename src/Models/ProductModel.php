<?php

class ProductModel {
public static function getProducts(PDO $db)
{
    $id = $_GET["id"];
    $sql = 'SELECT `price`, `color`, `stock`, `name` FROM `products` JOIN `categories`
        ON `products`.`category_id` = `categories`.`id` WHERE `category_id` =' . $id .';';
    $query = $db->prepare($sql);
   $query->setFetchMode(PDO::FETCH_CLASS, ProductsEntity::class);
    $query->execute();
    return $query->fetchAll();
}



}
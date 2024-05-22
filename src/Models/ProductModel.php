<?php
class ProductModel {
public static function getProducts(PDO $db, int $id) : array
{
    $sql = 'SELECT `id`, `price`, `color`, `stock` FROM `products` WHERE `category_id` = :id;';
    $query = $db->prepare($sql);
    $query->setFetchMode(PDO::FETCH_CLASS, ProductsEntity::class);
    $query->execute(['id'=>$id]);
    return $query->fetchAll();
}

    public static function getIndividualProduct(PDO $db, int $id) : array
    {
        $sql = 'SELECT `id`, `price`, `color`, `stock`, `width`, `height`, `depth`, `related` FROM `products` WHERE `id` = 1;';
        $query = $db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, ProductsEntity::class);
        $query->execute();
        return $query->fetch();
    }

    public static function getRelatedProduct(PDO $db int $id): array
{
    $sql = 'SELECT `id`, `price`, `stock`, `color` FROM `products` WHERE `id` = :id;';
}

}
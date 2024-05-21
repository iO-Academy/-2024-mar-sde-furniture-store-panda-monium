<?php

require_once 'src/Entities/CategoryEntity.php';

class CategoryModel
{
    public static function getCategories(PDO $db): array
    {
        $sql = 'SELECT `categories`.`id`, `categories`.`name`, SUM(`products`.`stock`) AS "stockTotal"
        FROM `products` JOIN `categories`
        ON `products`.`category_id` = `categories`.`id`
        GROUP BY `category_id`';

        $query = $db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, CategoryEntity::class);
        $query->execute();
        return $query->fetchAll();
    }
    public static function getCategoryTitle($db, $id)
    {
        $id = $_GET["id"];
        $sql = 'SELECT `categories`.`name` FROM `categories` JOIN `products`
        ON `products`.`category_id` = `categories`.`id` WHERE `category_id` =' . $id .';';
        $query = $db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, ProductsEntity::class);
        $query->execute();
        return $query->fetch();
    }
}


<?php

require_once 'src/Entities/CategoryEntity.php';

class CategoryModel
{
    public static function getCategories(PDO $db)
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
}


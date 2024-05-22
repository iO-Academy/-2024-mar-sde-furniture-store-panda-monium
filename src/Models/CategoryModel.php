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

    public static function getCategoryById(PDO $db, int $id): CategoryEntity | false
    {
        $sql = 'SELECT `categories`.`name` FROM `categories`  WHERE `id` = :id;';
        $query = $db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, CategoryEntity::class);
        $query->execute(["id"=>$id]);
        return $query->fetch();
    }
}


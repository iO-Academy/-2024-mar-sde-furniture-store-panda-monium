<?php

class CategoryModel
{
    public static function getCategories(PDO $db)
    {
        $sql = 'SELECT `categories`.`name`, COUNT(`products`.`category_id`) AS "stock"
        FROM `products` JOIN `categories`
        ON `products`.`category_id` = `categories`.`id`
        GROUP BY `category_id`';



        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll();

    }
}


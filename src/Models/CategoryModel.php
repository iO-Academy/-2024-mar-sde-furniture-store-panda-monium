<?php

class CategoryModel
{
    public static function getCategories(PDO $db)
    {
        $sql = 'SELECT `categories`.`id`, `categories`.`name`, `products`.`stock`, SUM(`products`.`stock`) AS "StockTotal"
        FROM `products` JOIN `categories`
        ON `products`.`category_id` = `categories`.`id`
        GROUP BY `category_id`';



        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll();

    }
}


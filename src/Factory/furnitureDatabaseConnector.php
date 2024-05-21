<?php
class furnitureDatabaseConnector
{
    public static function connect(): PDO
    {
        $db = new PDO('mysql:host=DB;dbname=furniture', 'root', 'password');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    }
}
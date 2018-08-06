<?php
class DBClass {

    private static $DB_USERNAME = '';
    private static $DB_PASSWORD = '';
    private static $servername = 'localhost';
    private static $dbname = 'php';

    private static $db = null;

    protected static function connect() {
        self::$db = new PDO("mysql:host=localhost;dbname=php", 'root', '');
    }

    public static function execute($sql, $values = array()) {
        if (self::$db === null) {
            self::connect();
        }
        $statement = self::$db->prepare($sql);
        $statement->execute($values);
        return $statement;
    }

    public static function query($sql, $values = array()) {
        $statement = self::execute($sql, $values);
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

}
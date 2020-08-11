<?php 

namespace application\libs;

use PDO;

class Database
{

    protected static $pdo;

    private static $hostName = '46.174.50.9';
    private static $dbName = 'u7767_node';
    private static $userName = 'u7767_node';
    private static $password = '2VhLENBWZ73CxTd';

    public function __construct() { }

    private static function connect() {

        $pdo = new \PDO(
            'mysql:host='.self::$hostName.';dbname='.self::$dbName.';charset=utf8', 
            self::$userName, 
            self::$password
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;

    }

    public static function query($sql, $params = array()) {

        $statement = self::connect()->prepare($sql);
        $statement->execute($params);

        if (explode(' ', $sql)[0] == 'SELECT') {
            $data = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

    }

}

?>
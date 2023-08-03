<?php

namespace App\DAL\Storage;

use PDO;
use PDOException;

class Database
{
    private $dbh;
    private static ?PDO $instance = null;
    private function __construct()
    {
        try {
            $this->dbh = new PDO($_ENV['DATABASE_DSN'], $_ENV['DATABASE_USERNAME'], $_ENV['DATABASE_PASSWORD']);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        }
    }

    public static function getInstance()
    {
        return self::$instance ?? new Database();
    }

    public function getDbh()
    {
        return $this->dbh;
    }
}

<?php

namespace BD\Database;

use PDO;
use PDOException;

/**
 * Class Connect
 * @package BD\Database
 */
class Connect
{
    /** @var PDO */
    private static $instance;

    /** @var PDOException */
    private static $error;

    /**
     * @return PDO
     */
    public static function getInstance(): ?PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    DATABASE_CONFIG["driver"] . ":host=" . DATABASE_CONFIG["host"] . ";dbname=" . DATABASE_CONFIG["dbname"] . ";port=" . DATABASE_CONFIG["port"],
                    DATABASE_CONFIG["username"],
                    DATABASE_CONFIG["passwd"],
                    DATABASE_CONFIG["options"]
                );
            } catch (PDOException $exception) {
                self::$error = $exception;
            }
        }
        return self::$instance;
    }


    /**
     * @return PDOException|null
     */
    public static function getError(): ?PDOException
    {
        return self::$error;
    }

    /**
     * Connect constructor.
     */
    private function __construct()
    {
    }

    /**
     * Connect clone.
     */
    private function __clone()
    {
    }
}

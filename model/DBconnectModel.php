<?php

/**
 * @author Perraudeau Victor
 */

/**
 * Create an instance of a secure PDO with Singleton
 */
class Spdo {

    private $PDOInstance = null;

    const DEFAULT_SQL_USER = 'root';
    const DEFAULT_SQL_HOST = 'localhost';
    const DEFAULT_SQL_PASS = '';
    const DEFAULT_SQL_DTB = 'notesWall';

    /**
     * Constructor
     *
     * @param void
     * @return void
     */
    public function __construct() {
        $this->PDOInstance = new PDO('mysql:dbname=' . self::DEFAULT_SQL_DTB . ';host=' . self::DEFAULT_SQL_HOST, self::DEFAULT_SQL_USER, self::DEFAULT_SQL_PASS);
    }

    /**
     * Create and return an object SPDO with singleton
     *
     * @param void
     * @return SPDO $instance
     */
    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * exec a query with pdo
     *
     * @param string $query request sql
     * @return PDOStatement return an object PDOStatement
     */
    public function query($query) {
        return $this->PDOInstance->query($query);
    }

    /**
     * exec an exec with pdo
     *
     * @param string $query request sql
     * @return PDOStatement return an object PDOStatement
     */
    public function exec($query) {
        return $this->PDOInstance->exec($query);
    }
}

?>

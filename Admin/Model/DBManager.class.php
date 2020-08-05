<?php


class DBManager
{
    const HOST = "mtl-svr-cpanel";
    const USER = "root";
    const PASS = "";
    const DBNAME = "wcms";

    protected $db = null;

    public function __construct() {
        //try to connect to the database using the provided credentials
        //if the connection works, it will keep the persistence, else it will throw an error
        try {
            $this->db = new PDO( "mysql:host=".self::HOST.";dbname=".self::DBNAME, self::USER, self::PASS );

            //show mysql errors
            $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $this->db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

            //show character encoding
            $this->db->exec( "set names utf8" );
        } catch ( Exception $e ) {
            die( "Database Connection Error: " . $e->getMessage() );
        }
    }
}
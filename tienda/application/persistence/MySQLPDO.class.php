<?php
class MySQLPDO {
    private static $host = ""; //o la IP del servidor de BBBDD remoto
    private static $database = "";
    private static $username = "";
    private static $password = "";
    private static $base;
    
    public static function connect() {
        if (MySQLPDO::$base != null) {
            MySQLPDO::$base = null;
        }
        try {
            $dsn = "mysql:host=" . MySQLPDO::$host . ";dbname=" . MySQLPDO::$database;
            MySQLPDO::$base = new PDO($dsn, MySQLPDO::$username, MySQLPDO::$password);
            MySQLPDO::$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return MySQLPDO::$base;
        } catch (Exception $e) {
            die ("Error connecting: {$e->getMessage()}");
        }
    }
    
    //ejecuta sentencias INSERT, UPDATE y DELETE
    public static function exec($sql, $params) {
        $stmt = MySQLPDO::$base->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->rowCount();
        return $result; //devuelve el nº de filas afectadas por la sentencia
    }
    
    //ejecuta sentencias SELECT
    public static function select($sql, $params) {
        $stmt = MySQLPDO::$base->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetchAll();
        return $result; //devuelve el conjunto de datos de la consulta
    }
    

    
    
    public static function listarUsuarios() { 
        $sql = "SELECT * FROM usuario";
        $params = array();
        $datos = MySQLPDO::select($sql, $params);
        return XXXXXXXXXXXXXXXXXXX;
        
    }
}
?>
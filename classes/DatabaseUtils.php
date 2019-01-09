<?php
require_once EXEC_DECISION_CONTROLLERS . 'TurnsController.php';
require_once EXEC_DECISION_CONTROLLERS . 'MaterialsController.php';
require_once EXEC_DECISION_CONTROLLERS . 'ProductsController.php';
require_once EXEC_DECISION_CONTROLLERS . 'ScheduleDemandController.php';
require_once EXEC_DECISION_CONTROLLERS . 'ScheduleSupplyController.php';

class DatabaseUtils
{

    public static $conn;

    public static function ConnectToDb()
    {
        header("Expires: 0");
        header("cache-control: no-store, no-cache, must-revalidate");
        header("Pragma: no-cache");

        $db_connect_file = EXEC_DECISION_ROOT . 'database.php';
        self::$conn = NULL;
        include ($db_connect_file);
        if (!isset($username) || !isset($password) || !isset($db) || (!isset($hostname) && !isset($db_socket)))
        {
            exit("There is not a valid hostname ($hostname) / database ($db) / username ($username) / password (XXXXXX) combination in your database connection file [$db_conn_file].");
        }

        if (function_exists('mysqli_connect'))
        {
            $port = '';
            if (strpos($hostname, ':') !== false) {
                list ($hostname_wo_port, $port) = explode(':', $hostname, 2);
            }
            $hostname = preg_replace("/\:.*/", '', $hostname);
            if (!is_numeric($port)) $port = '3306'; // Default MySQL port
            if ($hostname === null && $db_socket === null) $port = null;
            self::$conn = mysqli_connect($hostname, $username, $password, $db, $port, $db_socket);
            if (!self::$conn)
            {
                exit("The hostname ($hostname) / username ($username) / password (XXXXXX) combination in your database connection file [$db_conn_file] could not connect to the server. Please check their values.<br><br>You may need to complete the <a href='install.php'>installation</a>.");
            }
        }
    }

    public static function LoadTables()
    {
        TurnsController::LoadTurns();
        MaterialsController::LoadData();
        ProductsController::LoadData();
        ScheduleDemandController::LoadData();
        ScheduleSupplyController::LoadData();
    }
}

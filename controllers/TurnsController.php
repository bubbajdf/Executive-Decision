<?php

class TurnsController
{
    public static $turns;

    function __construct()
    {
         self::$turns = array();
    }

    public static function LoadTurns()
    {
        $conn = DatabaseUtils::$conn;
        self::$turns = array();

        $result = mysqli_query($conn, "SELECT `Turn_Code` FROM turn");

        if ($result)
        {
            while ($row = $result->fetch_assoc())
            {
                $shortcode = $row['Turn_Code'];
                $code = date('F', strtotime($shortcode));

                $turn = new \stdclass();
                $turn->shortmonth = $shortcode;
                $turn->fullmonth = $code;
                self::$turns[] = $turn;
            }
        }

        mysqli_free_result($result);
    }
}

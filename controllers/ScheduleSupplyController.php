<?php

class ScheduleSupplyController
{
    public static $schedule;
    
    function __construct() 
    {
         self::$schedule = array();
    }
     
    public static function LoadData()
    {
        
        $conn = DatabaseUtils::$conn;
        self::$schedule = array();
        
        $result = mysqli_query($conn, "SELECT `units`, `movement` FROM schedule_supply order by `units`");
        
        if ($result)
        {
            while ($row = $result->fetch_assoc()) 
            {
                $row1 = new \stdclass();
                $row1->unit = $row['units'];
                $row1->movement = $row['movement'];
                self::$schedule[] = $row1;
            }
        }
        
        mysqli_free_result($result);
    }
}        

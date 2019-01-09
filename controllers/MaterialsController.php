<?php

class MaterialsController
{
    public static $materials;
    
    function __construct() 
    {
         self::$materials = array();
    }
    
    public static function getOpeningValue($material)
    {
        $value = '';
        switch ($material)
        {
            case 'X-FINE':
              $value = '40';
              break;
            case 'FINE':
              $value = '30';
              break;
            case 'STD':
              $value = '20';
              break;
        }
        
        return $value;
    }
     
    public static function LoadData()
    {
        $conn = DatabaseUtils::$conn;
        self::$materials = array();
        
        $result = mysqli_query($conn, "SELECT `material_code` FROM material order by `display_priority`");
        
        if ($result)
        {
            while ($row = $result->fetch_assoc()) 
            {
                $code = $row['material_code'];
                array_push(self::$materials, $code);
            }
        }
        
        mysqli_free_result($result);
    }
}        

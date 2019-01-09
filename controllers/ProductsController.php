<?php

class ProductsController
{
    public static $products;
    
    function __construct() 
    {
         self::$products = array();
    }
    
    public static function getOpeningValue($material)
    {
        $value = '';
        switch ($material)
        {
            case 'A':
              $value = '140';
              break;
            case 'B':
              $value = '115';
              break;
            case 'C':
              $value = '90';
              break;
        }
        
        return $value;
    }
     
    public static function LoadData()
    {
        $conn = DatabaseUtils::$conn;
        self::$products = array();
        
        $result = mysqli_query($conn, "SELECT `product_code` FROM product order by `display_priority`");
        
        if ($result)
        {
            while ($row = $result->fetch_assoc()) 
            {
                $code = $row['product_code'];
                array_push(self::$products, $code);
            }
        }
        
        mysqli_free_result($result);
    }
}        

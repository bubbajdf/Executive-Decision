<?php

class PriceBoardUtils
{
    
    public static function LoadTurnColumnHeadings()
    {
        $myturns = TurnsController::$turns;
        $html = '';

        foreach ($myturns as $key=>$turn)
        {
            $a = strtoupper($turn->fullmonth);
            $row = <<<HTML
<th>$a</th>
HTML;

            $html = $html . $row;

        }

        return $html;
    }
    
    public static function LoadRawMaterialsMonthlyData()
    {
        $materials = MaterialsController::$materials;
        $myturns = TurnsController::$turns;
        
        $html = '';
        foreach ($materials as $key=>$material)
        {
            $html = $html . '<tr>';
            $html = $html . '<td>' . $material . '</td>';     // Material
            $opening = MaterialsController::getOpeningValue($material);
            $html = $html . '<td>' . $opening . '</td>';      // Opening Price
            foreach ($myturns as $key=>$turn)
            {
                $html = $html . '<td>' . '</td>';
                $amt = '';
            }
            $html = $html . '</tr>';
        }
        
        return $html;
    }
    
    public static function LoadFinishedGoodsMonthlyData()
    {
        $products = ProductsController::$products;
        $myturns = TurnsController::$turns;
        
        $html = '';
        foreach ($products as $key=>$product)
        {
            $html = $html . '<tr>';
            $html = $html . '<td>' . $product . '</td>';      // product
            $opening = ProductsController::getOpeningValue($product);
            $html = $html . '<td>' . $opening . '</td>';      // Opening Price
            foreach ($myturns as $key=>$turn)
            {
                $html = $html . '<td>' . '</td>';
                $amt = '';
            }
            $html = $html . '</tr>';
        }
        
        return $html;
    }

    public static function CreateRawMaterialsUnitsRow()
    {
        $schedule = ScheduleDemandController::$schedule;
        
        $html = <<<HTML
<tr>
   <th>UNITS</th>
HTML;
        foreach ($schedule as $key=>$value)
        {
            $x = $value->unit;
            $html = $html . '<th>' . $x . '</th>' . PHP_EOL;
        }

        $html = $html . '<tr>';

        return $html;

    }

    public static function CreateRawMaterialsMovementsRow()
    {
        $schedule = ScheduleDemandController::$schedule;
        $html = <<<HTML
<tr>
   <th>MOVEMENT</th>
HTML;
        foreach ($schedule as $key=>$value)
        {
            $y = $value->movement;
            $html = $html . '<th>' . $y . '</th>' . PHP_EOL;
        }

        $html = $html . '<tr>';

        return $html;

    }

    public static function CreateFinishedGoodsUnitsRow()
    {
        $schedule = ScheduleSupplyController::$schedule;
        $html = <<<HTML
<tr>
  <th>UNITS</th>
HTML;
        foreach ($schedule as $key=>$value)
        {
            $x = $value->unit;
            $html =  $html . '<th>' . $x . '</th>' . PHP_EOL;
        }

        $html = $html . '<tr>';

        return $html;
    }

    public static function CreateFinishedGoodsMovementRow()
    {
        $schedule = ScheduleSupplyController::$schedule;
        $html = <<<HTML
<tr>
  <th>MOVEMENT</th>
HTML;
        foreach ($schedule as $key=>$value)
        {
            $y = $value->movement;
            $html =  $html . '<th>' . $y . '</th>' . PHP_EOL;
        }

        $html = $html . '<tr>';

        return $html;
    }

    public static function CreateBlankColumns()
    {
       for ($x = 1; $x <= 18; $x++)
       {
           $html = <<<HTML
<td></td>
HTML;
            echo $html;
       }
    }

    public static function CreateBlankTotals()
    {
       for ($x = 1; $x <= 6; $x++)
       {
           $html = <<<HTML
<th colspan="2">TOTAL</th>
<th></th>
HTML;
            echo $html;
       }
    }

}

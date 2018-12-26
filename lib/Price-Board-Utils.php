<?php

function CreateRawMaterialsUnitsRow()
{
    $html = <<<HTML
<tr>
   <th>UNITS</th>
HTML;
    for ($x = 0; $x <= 24; $x++)
    {
        $html = $html . '<th>' . $x . '</th>' . PHP_EOL;
    }

    $html = $html . '<tr>';

    return $html;

}

function CreateRawMaterialsMovementsRow()
{
    $html = <<<HTML
<tr>
   <th>MOVEMENT</th>
HTML;
    for ($x=0;$x<=24;$x++)
    {
        $y = $x - 10;
        $html = $html . '<th>' . $y . '</th>' . PHP_EOL;
    }

    $html = $html . '<tr>';

    return $html;

}

function CreateFinishedGoodsUnitsRow()
{
    $html = <<<HTML
<tr>
  <th>UNITS</th>
HTML;
    for ($x=0;$x<=16;$x++)
    {
        $html =  $html . '<th>' . $x . '</th>' . PHP_EOL;
    }

    $html = $html . '<tr>';

    return $html;
}

function CreateFinishedGoodsMovementRow()
{
    $html = <<<HTML
<tr>
  <th>MOVEMENT</th>
HTML;
    for ($x=0;$x<=16;$x++)
    {
        $y = 11 - ($x * 2);
        $html =  $html . '<th>' . $y . '</th>' . PHP_EOL;
    }

    $html = $html . '<tr>';

    return $html;
}

function CreateProductionChart()
{
}

function CreateBlankColumns()
{
   for ($x = 1; $x <= 18; $x++)
   {
       $html = <<<HTML
<td></td>
HTML;
        echo $html;
   }
}

function CreateBlankTotals()
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

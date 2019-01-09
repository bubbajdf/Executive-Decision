<?php
require_once EXEC_DECISION_CLASSES . 'Price-Board-Utils.php';
?>

<h1 align="center">Executive Decision Price Level Board</h1>

<head>
<link rel="stylesheet" type="text/css" href="css\price-board.css">
</head> 

<div class="topgrid">
<table>
<body> 
  <tr>
   <th></th>
   <th>Opening Price</th>
<?php
echo PriceBoardUtils::LoadTurnColumnHeadings();
?>
 </tr>
 <tr>
   <td class="color"  colspan="14">RAW MATERIALS</td>
 </tr>
<?php
echo PriceBoardUtils::LoadRawMaterialsMonthlyData();
?>
 <tr>
   <td class="color" colspan="14">FINISHED GOODS</td>
 </tr>
<?php
echo PriceBoardUtils::LoadFinishedGoodsMonthlyData();
?>
 </table>
</div>
<br>
<div class="outer">
<div class="market">
    <h2>MARKET CALCULATOR</h2>
    <h3>RAW MATERIALS</h3>
<table>
 <tr>
<?php
$a = PriceBoardUtils::CreateRawMaterialsUnitsRow();
echo $a;
$a = PriceBoardUtils::CreateRawMaterialsMovementsRow();
echo $a;
?>
 </tr>
</table>
    <br>
    <h3>FINISHED GOODS</h3>
<table>
<?php
$a = PriceBoardUtils::CreateFinishedGoodsUnitsRow();
echo $a;
$a = PriceBoardUtils::CreateFinishedGoodsMovementRow();
echo $a;
?>
</table>
</div>
<div class="production">
    <h2>PRODUCTION CHART</h3>
    <h3>RAW MATERIALS</h3>
<table class="larger">
 <tr>
  <th>Finished Goods</th>
  <th>X-FINE</th>
  <th>FINE</th>
  <th>STD.</th>
 </tr>
  <tr>
   <td>A</td>
   <td>2</td>
   <td>1</td>
   <td></td>
  </tr>
  <tr>
   <td>B</td>
   <td>1</td>
   <td>1</td>
   <td>1</td>
  </tr>
  <tr>
   <td>C</td>
   <td></td>
   <td>1</td>
   <td>2</td>
  </tr>
</table>
</div>
</div>

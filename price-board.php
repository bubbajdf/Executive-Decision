<?php
require_once 'lib/Price-Board-Utils.php';

?>

<h1 align="center">Executive Decision Price Level Board</h1>

<head>
<link rel="stylesheet" type="text/css" href="css\price-board.css">
</head> 

<div class="topgrid">
<table>
<body> 
  <tr>
   <th>
   <th>Opening Price</th>
   <th>JAN.</th>
   <th>FEB.</th>
   <th>MARCH</th>
   <th>APRIL</th>
   <th>MAY</th>
   <th>JUN.</th>
   <th>JULY</th>
   <th>AUG.</th>
   <th>SEPT.</th>
   <th>OCT.</th>
   <th>NOV.</th>
   <th>DEC.</th>
 </tr>
 <tr>
   <td class="color"  colspan="14">RAW MATERIALS</td>
 </tr>
 <tr>
   <td>X-FINE</td>
   <td>40</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td>FINE</td>
   <td>30</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td>STD.</td>
   <td>20</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td class="color" colspan="14">FINISHED GOODS</td>
 </tr>
 <tr>
   <td>A</td>
   <td>140</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td>B</td>
   <td>115</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td>E</td>
   <td>90</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
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
$a = CreateRawMaterialsUnitsRow();
echo $a;
$a = CreateRawMaterialsMovementsRow();
echo $a;
?>
 </tr>
</table>
    <br>
    <h3>FINISHED GOODS</h3>
<table>
<?php
$a = CreateFinishedGoodsUnitsRow();
echo $a;
$a = CreateFinishedGoodsMovementRow();
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

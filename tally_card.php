<?php
require_once EXEC_DECISION_CLASSES . 'Price-Board-Utils.php';
?>

<h1 align="center">Executive Decision Tally</h1>
<head>
<link rel="stylesheet" type="text/css" href="css\tally-card.css">
</head>
<body>
<div class="topgrid">
<table>
  <tr>
    <th class="color" colspan="19">ORDERS</th>
  </tr>
<!-- JAN THRU JUNE -->
  <tr>
   <th></th>
   <th colspan="3">JANUARY</th>
   <th colspan="3">FEBRUARY</th>
   <th colspan="3">MARCH</th>
   <th colspan="3">APRIL</th>
   <th colspan="3">MAY</th>
   <th colspan="3">JUNE</th>
  </tr>
  <tr>
   <th>Raw Materials</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
 </tr>
 <tr>
   <td>X-FINE</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
 </tr>
 <tr>
   <td>FINE</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
 </tr>
 <tr>
   <td>STD.</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
 </tr>
 <tr>
   <th></th>
<?php
PriceBoardUtils::CreateBlankTotals();
?>
 </tr>
<!-- JULY THRU DEC -->
  <tr>
   <th></th>
   <th colspan="3">JULY</th>
   <th colspan="3">AUGUST</th>
   <th colspan="3">SEPTEMBER</th>
   <th colspan="3">OCTOBER></th>
   <th colspan="3">NOVEMBER</th>
   <th colspan="3">DECEMBER</th>
  </tr>
  <tr>
   <th>Raw Materials</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Paid</th>
 </tr>
 <tr>
   <td>X-FINE</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
 </tr>
 <tr>
   <td>FINE</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
 </tr>
 <tr>
   <td>STD.</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
 </tr>
 <tr>
   <th></th>
<?php
PriceBoardUtils::CreateBlankTotals();
?>
 </tr>
</table>
<!-- SALES -->
<table>
  <tr>
    <th class="color" colspan="19">SALES</th>
  </tr>
<!-- JAN THRU JUNE -->
  <tr>
   <th></th>
   <th colspan="3">JANUARY</th>
   <th colspan="3">FEBRUARY</th>
   <th colspan="3">MARCH</th>
   <th colspan="3">APRIL</th>
   <th colspan="3">MAY</th>
   <th colspan="3">JUNE</th>
  <tr>
  <tr>
   <th>Finished Goods</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
  <tr>
    <td>A</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
  </tr>
  <tr>
    <td>B</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
  </tr>
  <tr>
    <td>C</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
  </tr>
 <tr>
   <th></th>
<?php
PriceBoardUtils::CreateBlankTotals();
?>
 </tr>
<!-- JULY THRU DEC -->
  <tr>
   <th></th>
   <th colspan="3">JULY</th>
   <th colspan="3">AUGUST</th>
   <th colspan="3">SEPTEMBER</th>
   <th colspan="3">OCTOBER</th>
   <th colspan="3">NOVEMBER</th>
   <th colspan="3">DECEMBER</th>
  </tr>
  <tr>
   <th>Finished Goods</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
   <th>Units Bid</th>
   <th>Bid Price</th>
   <th>Amount Rcvd.</th>
  <tr>
    <td>A</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
  </tr>
  <tr>
    <td>B</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
  </tr>
  <tr>
    <td>C</td>
<?php
PriceBoardUtils::CreateBlankColumns();
?>
  </tr>
 <tr>
   <th></th>
<?php
PriceBoardUtils::CreateBlankTotals();
?>
 </tr>
</table>
</body>
</div>

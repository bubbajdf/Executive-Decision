<?php

require_once 'lib/DatabaseUtils.php';

$conn = ConnectToDb();

$price_visible = 'display:block';
$tally_visible = 'display:block';
$players_visible = 'display:block';
$main_visible = 'display:none';

if (isset($_POST['price']))
{
    require_once 'price-board.php';
    $price_visible = 'display:none';
    $tally_visible = 'display:none';
    $players_visible = 'display:none';
    $main_visible = 'display:block';
}

if (isset($_POST['tally']))
{
    require_once 'tally_card.php';
    $tally_visible = 'display:none';
    $price_visible = 'display:none';
    $players_visible = 'display:none';
    $main_visible = 'display:block';
}

if (isset($_POST['players']))
{
    require_once 'players.php';
    $tally_visible = 'display:none';
    $price_visible = 'display:none';
    $players_visible = 'display:none';
    $main_visible = 'display:block';
}

if (isset($_POST['main']))
{
    $tally_visible = 'display:block';
    $price_visible = 'display:block';
    $players_visible = 'display:block';
    $main_visible = 'display:none';
}

?>

<form action="" method="post">

<input type="submit" name="price" id="price" value="Price Board" style="<?php echo $price_visible?>">
<input type="submit" name="tally" id="tally" value="Tally Card" style="<?php echo $tally_visible?>">
<input type="submit" name="players" id="players" value="Players" style="<?php echo $players_visible?>">
<input type="submit" name="main" id="main" value="Main Form" style="<?php echo $main_visible?>">

</form>

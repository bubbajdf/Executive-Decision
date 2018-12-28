<?php
?>

<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/players.js"></script>
<link rel="stylesheet" type="text/css" href="css\players.css">
<h1 align="center">Executive Decision Players</h1>

<div>
<label for="player1">Player 1 Name:</label>
<input type="text" name="player1" id="player1" value="">
<br>
<label for="player2">Player 2 Name:</label>
<input type="text" name="player2" id="player2" value="">
<input type="button" id="add2" onclick="AddPlayerClick(this)" value="Add Player">
</div>
<div id="extraplayers" name="extraplayers">
</div>
<br>
<input type="submit" name="submit" id="submit" value="Submit" style="display:block">
<br>

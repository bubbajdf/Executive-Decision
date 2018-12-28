<?php
?>

<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/players.js"></script>
<h1 align="center">Executive Decision Players</h1>

<div>
<label for="player1">Player 1 Name:</label>
<input type="text" name="player1" id="player1" value="">
<br>
<label for="player2">Player 2 Name:</label>
<input type="text" name="player2" id="player2" value="">
<button id="add2" onclick="AddPlayerClick(this)">Add Player</button>
<button id="FamilyID_PVSearchButton">Delete Player</button>
</div>
<div id="extraplayers" name="extraplayers">
</div>
<!--
<br>
<label for="player3">Player 3 Name:</label>
<input type="text" name="player3" id="player3" value="">
<br>
<label for="player4">Player 4 Name:</label>
<input type="text" name="player4" id="player4" value="">
<br>
<label for="player5">Player 5 Name:</label>
<input type="text" name="player5" id="player5" value="">
<br>
<label for="player6">Player 6 Name:</label>
<input type="text" name="player6" id="player6" value="">
-->
<br>
<input type="submit" name="submit" id="submit" value="Submit" style="display:block">
<br>

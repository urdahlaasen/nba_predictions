<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NBA Predictions</title>
  <link rel="stylesheet" href="style2.css">
  <script defer src="script2.js"></script>
</head>
<body>
<div class="full-screen-container">
  
  <div class="container">
    <form id="sortable-form" action="submit.php" method="POST">    
    <div class="list-container">
      <ul id="sortable-list-1" class="sortable-list">
        <li class="draggable" draggable="true" data-id="1">OKC</li>
        <li class="draggable" draggable="true" data-id="2">Nuggets</li>
        <li class="draggable" draggable="true" data-id="3">Timberwolves</li>
        <li class="draggable" draggable="true" data-id="4">Clippers</li>
        <li class="draggable" draggable="true" data-id="5">Dallas</li>
        <li class="draggable" draggable="true" data-id="6">Suns</li>
        <li class="draggable" draggable="true" data-id="7">Lakers</li>
        <li class="draggable" draggable="true" data-id="8">Pelicans</li>
        <li class="draggable" draggable="true" data-id="9">Kings</li>
        <li class="draggable" draggable="true" data-id="10">Warriors</li>
        <li class="draggable" draggable="true" data-id="11">Rockets</li>
        <li class="draggable" draggable="true" data-id="12">Jazz</li>
        <li class="draggable" draggable="true" data-id="13">Grizzlies</li>
        <li class="draggable" draggable="true" data-id="14">Spurs</li>
        <li class="draggable" draggable="true" data-id="15">Portland</li>     
      </ul>
      <ul id="sortable-list-2" class="sortable-list">
        <li class="draggable" draggable="true" data-id="16">Boston Celtics</li>
        <li class="draggable" draggable="true" data-id="17">Brooklyn Nets</li>
        <li class="draggable" draggable="true" data-id="18">Hornets</li>
        <li class="draggable" draggable="true" data-id="19">Chicago Bulls</li>
        <li class="draggable" draggable="true" data-id="20">Cavaliers</li>
        <li class="draggable" draggable="true" data-id="21">Detroit Pistons</li>
        <li class="draggable" draggable="true" data-id="22">Indiana Pacers</li>
        <li class="draggable" draggable="true" data-id="23">Bucks</li>
        <li class="draggable" draggable="true" data-id="24">Philly 76ers</li>
        <li class="draggable" draggable="true" data-id="25">Miami Heat</li>
        <li class="draggable" draggable="true" data-id="26">Raptors</li>
        <li class="draggable" draggable="true" data-id="27">Wizards</li>
        <li class="draggable" draggable="true" data-id="28">Atlanta Hawks</li>
        <li class="draggable" draggable="true" data-id="29">Orlando Magic</li>
        <li class="draggable" draggable="true" data-id="30">Knicks</li>    
      </ul>
      </div>
      <input type="hidden" name="sortedOrder1" id="sortedOrder1">
      <input type="hidden" name="sortedOrder2" id="sortedOrder2">
      <button type="submit">Submit</button>
    </form>
  </div>
 </div>
</body>
</html>


<?php
/*
echo "<h1>Success</h1>";
if(isset($_SESSION['username'])){
echo "Welcome " . $_SESSION['username']; 
}
*/
?>

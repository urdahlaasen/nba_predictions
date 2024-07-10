<?php
session_start();
?>
<?php
echo "<h1>Success</h1>";
if(isset($_SESSION['username'])){
echo "Welcome " . $_SESSION['username']; 
}
?>

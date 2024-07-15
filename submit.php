<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['sortedOrder1'])){
     $sortedOrder = $_POST['sortedOrder1'];
     $sortedOrder = explode(',', $sortedOrder);
     echo '<pre>';
     print_r($sortedOrder);
     echo '</pre>';
 }
 if(isset($_POST['sortedOrder2'])){
     $sortedOrder = $_POST['sortedOrder2'];
     $sortedOrder = explode(',', $sortedOrder);
     echo '<pre>';
     print_r($sortedOrder);
     echo '</pre>';
 }
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
</head>
<body>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quantity = (isset($_POST['quantity'])) ? filter_var($_POST['quantity'], FILTER_VALIDATE_INT, array('min_range' => 1)) : NULL;
    $price = 

}
 ?>
    
</body>
</html>
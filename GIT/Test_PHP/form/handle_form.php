<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your Feedback</title>
</head>
<body>
<?php 

$title = $_POST['title'];
$name = $_POST['name']; 
$response = $_POST['response']; 
$comments = $_POST['comments']; 

echo "<p>Thank you, $title $name , for your comments/</p>
<p>You started that you found this example to be $response and added: <br />$comments</p>";

 ?>
    
</body>
</html>
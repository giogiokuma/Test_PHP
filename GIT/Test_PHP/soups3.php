<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Mmm...</h1>

<?php 

$soups = [
    'Monday' => 'Clam Chowder',
    'Tuesday' => 'White Chicken Chili',
    'Wednesday' => 'Vegetarian',
    'Thursday' => 'Chicken Noodle',
    'Friday' => 'Tomato',
    'Saturday' => 'Cream of Broccoli'
];

foreach($soups as $day => $soup) {
    print "<p>$day: $soup</p>\n"; 
}


 ?>

</body>
</html>
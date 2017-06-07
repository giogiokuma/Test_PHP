

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Mmm...soups</h1>

$soups = [
    'Monday' => 'Clam Chowder', 
    'Tuesday' => 'White Chicken Chilli',
    'Wednesday' => 'Vegetarian'
];


$count1 = count($soups); 
print "<p>The soup array originally had $count1 element</p>"; 


$soups['Thursday'] = 'Checken Noodle';
$soups['Friday'] = 'Tomato'; 
$soups['Saturday'] = 'Cream of Borccoli'; 

$count2 = count($soups); 
print "<p>After adding 3 soups, the array now has $count2 elements</p>"; 

print_r($soups); 






</body>
</html>
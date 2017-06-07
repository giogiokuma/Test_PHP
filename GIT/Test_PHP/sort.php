
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php  
$grades = [
    'Richard' => 95, 
    'Sherwood' => 82, 
    'Toni' => 98,
    'Franz' => 83, 
    'Melissa' => 75, 
    'Roddy' => 85
]; 


print '<p>Originally the array looks like this: <br />'; 
foreach($grades as $student => $grade) {
print "$student: $grade<br />\n"; 
}

print '</p>'; 

asort($grades); 

print '<p>After sorting the array by value using arsort(), the array looks loke this: </p>';

foreach($grades as $student => $grade) {
    print "$sudent: $grade\n"; 
}

print '</p>'; 

ksort($grades); 

print '<p>After sorting the array by key using ksort(), the array looks like this: </p>' ; 

foreach ($grades as $student => $grade) {
    print "$student: $grade<br />\n"; 
}


print '</p>'; 

?>

    
</body>
</html>
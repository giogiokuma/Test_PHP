

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
$words_array = explode(' ', $_POST['words']); 

sort($words_array) ;


$string_words = implode('<br>', $words_array); 


print "An alphabetized version of your list is: <br>$string_words</p>";

 ?>
    
</body>
</html>
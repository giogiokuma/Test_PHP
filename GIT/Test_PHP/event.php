

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 

print "<p>You want to add an event called <b>{$_POST['name']}</b> which takes place on: </p>"; 

if (isset($_POST['days']) AND is_array($_POST['days'])) {
    foreach($_POST['days'] as $day) {
        print "$day<br />\n"; 


    }
} else {
    print 'Please select as least one weekday for this event !'; 
}


print '</p>'; 


 ?>
</body>
</html>
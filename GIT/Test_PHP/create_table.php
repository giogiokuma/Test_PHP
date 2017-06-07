<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create a Table</title>
</head>
<body>
<?php 

if ($dbc = @mysqli_connect('mysql420.db.sakura.ne.jp', 'ohatadesign', '1hitsuji', 'ohatadesign_5')) {
    $query = 'CREATE TABLE entries (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100) NOT NULL,
entry TEXT NOT NULL,
date_entered DATETIME NOT NULL
) CHARACTER SET utf8';

    if (@mysqli_query($dbc, $query)) {
        print '<p>The table has been created</p>';
    } else  {
        print '<p style="color: red;">Could not create the table because: <br />' . mysqli_error($dbc) . '</p><p>The query being run was: </p>' . $query . '</p>';         
    }
    mysqli_close($dbc);
} else {
    print '<p style="color: red;">Could not connect to the databse: <br />' . mysqli_connect_error() . '.</p>'; 
}




 ?>
    
</body>
</html>
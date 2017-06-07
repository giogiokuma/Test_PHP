
<?php 


if ($dbc = @mysqli_connect('mysql420.db.sakura.ne.jp', 'ohatadesign', '1hitsuji', 'ohatadesign_5')) {

    print '<p>Successfully connected to the database!</p>'; 
    mysqli_close($dbc); 
} else {
    print '<p style="color: red; "> Could not connect to the database.</p>'; 
}


 ?>
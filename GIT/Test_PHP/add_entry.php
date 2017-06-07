
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add entry</title>
</head>
<body>
<h1>Add Blog Entry </h1>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $problem = FALSE; 
    if (!empty($_POST['title']) && !empty($_POST['entry'])) {
        $title = trim(strip_tags($_POST['title'])); 
        $entry = trim(strip_tags($_POST['entry'])); 
    } else {
        print '<p style="color: red;">Please submit both a title and entry.</p>';
        $problem = TRUE;
    }

    if (!$problem ) {
        $dbc = mysqli_connect('mysql420.db.sakura.ne.jp', 'ohatadesign', '1hitsuji', 'ohatadesign_5');

        $query = "INSERT INTO entries (id, title, entry, date_entered) VALUES (0, '$title', '$entry', NOW())";

        if (@mysqli_query($dbc, $query)) {
            print '<p>The blog entry has been added!</p>'; 
        } else {
            print '<p style="color: red;">Could not add the entry becase:<br />' . mysqli_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>'; 

        }
        mysqli_close($dbc); 
    }
}



 ?>

<form action="add_entry.php" method="post">
    <p>Entry Title: <input type="text" name="title" size="40" maxsize="100"></p>
    <p>Entry Text: <textarea name="entry" id="" cols="30" rows="10"></textarea></p>
    <input type="submit" name="submit" value="Post This Entry!">
</form>



</body>
</html>
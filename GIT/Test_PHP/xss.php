

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XSS Attack</title>
</head>
<body>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h2>Origial</h2><p>{$_POST['data']}</p>";
    echo "<h2>After htmlentities()</h2><p>" . htmlentities($_POST['data']) . '</p>';
    echo "<h2>After strip_tags()</h2><p>" . strip_tags($_POST['data']) . '</p>';
}
 ?>

<form action="xss.php" method="post">
    <p>Do your worst! <textarea name="data" cols="40" rows="3"></textarea></p>
    <div align="center"><input type="submit" name="submit" value="Submit" /></div>
</form>

</body>
</html>
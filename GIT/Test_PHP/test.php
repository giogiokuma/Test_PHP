<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
<form action="test.php" method="post">
    <p>First Name: <input type="text" name="first_name" size="20"></p>

    <p>Last Name: <input type="text" name="last_name" size="20"></p>

    <p>Email Address: <input type="email" name="email" size="30"></p>

    <p>Posting: <textarea name="posting" rows="9" cols="30"></textarea></p>

    
    <input type="submit" name="submit" value="Send My Posting">
</form>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array();
  if (empty($_POST['first_name'])) {
      $errors[] = 'Please enter first name'; 
  } else {
    $first_name = $_POST['first_name'];
  }

  if (empty($_POST['last_name'])) {
      $errors[] = 'Please enter last name'; 
  } else {
    $last_name = $_POST['last_name'];
  }

  if (empty($_POST['posting'])) {
      $errors[] = 'Please enter posting'; 
  } else {
    $last_name = $_POST['posting'];
  }


if (empty($errors)) {
// Create a full name variable:
$name = $first_name . ' ' . $last_name;

// Print a message:
print "<div>Thank you, $name, for your posting:
<p>$posting</p></div>";
}


}
else {
  
}


 ?>

    
</form>
</body>
</html>
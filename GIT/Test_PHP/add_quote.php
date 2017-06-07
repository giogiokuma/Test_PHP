<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add a Quote</title>
</head>
<body>

<?php 

$file = '../quotes.txt'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['quote']) && ($_POST['quote'] != 'Enter your quotation here.')) {
        if (is_writable($file)) {

            file_put_contents($file, $_POST['quote'] . PHP_EOL, FILE_APPEND | LOCK_EX); 

            print '<p>Your quotation has been stored.</p>'; 
        }else {
            print '<p style="color: red">Your quotation could not be stored due to a sustem error.</p>';
        }
    } else {
        print '<p style="color: red">Please enter a quotation!</p>'; 
    }
}




 ?>
<form action="add_quote.php">
  <textarea name="quote" cols="30" rows="9">Enter your quotation here.</textarea>    
  <input type="submit" name="submit" value="Add This Quote">

</form>

</body>
</html>
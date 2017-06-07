<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<form action="posting.php" method="post">
<p>お名前（姓）：<input type="text" name="first_name" size="20"></p>
<p>お名前（名）: <input type="text" name="last_name" size="20"></p>
<p>メールアドレス: <input type="text" name="e-mail" size="30"></p>
<p>コンテンツ： <textarea name="posting" cols="30" rows=""></textarea></p>
<p><input type="submit" name="submit" value="送信" id="submit"></p>
<input type="hidden" name="submit_count" value="1" id="submit_count" />

</form>


<?php 
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']); 
$posting  = trim($_POST['posting']); 

$submit_count = 0;
$total_count = 0;

if (@$_REQUEST['submit_count'] == "1"):
    $submit_count++;
else:
endif;

echo "" .$submit_count . "<br />";


  if (isset($_POST['submit'])) {
      if ($total_count < 10) {
        echo $total_count. ' --> ';
        $total_count++;
        echo $total_count;
      }
  }
 ?>

</body>
</html>
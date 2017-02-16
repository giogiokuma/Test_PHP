<?php 


$page_title = 'Edit a User'; 
include ('includes/header.html'); 
echo '<h1>ユーザーを編集</h1>';

// ユーザーid をチェック
if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
    $id = $_GET['id']; 
} elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
    $id = $_POST['id']; 
} else {
    echo '<p class="error">This page has been asscessed in error.</p>';
    include('includes/footer.html'); 
    exit();

}

require('../../mysqli_connect.php'); 

// Check if the form has been submitted: 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array();

    if (empty($_POST['first_name'])) {
        $errros[] = 'お名前（姓）を記入してください';
    } else {
        $fn = mysqli_real_escape_string($dbc, trim($_POST['first_name'])); 
    }

    if (empty($_POST['last_name'])) {
        $errors[] = 'お名前（名）を記入してください'; 
    } else {
        $ln = mysqli_real_escape_string($dbc, trim($_POST['last_name'])); 
    }

    if (empty($errors['email'])) {
        $errors[] = 'メールアドレスを入力してださい';
    } else {
        $e = mysqli_real_escape_string($dbc, trim($_POST['email']));
    }

    if (empty($errors)) {
        $q = "SELECT user_id FROM users WHERE email='$e' AND user_id != $id";
        $r = @myslqi_query($dbc, $q); 
        if (mysqli_num_rows($r) == 0) {
            $q = "UPDATE users SET first_name='$fn', last_name='$ln', email='$e', WHERE user_id=$id LIMIT 1";
            $r = @mysqli_query($dbc, $q); 
            if (mysqli_affected_rows($dbc) == 1) {
                echo '<p>ユーザーを編集しました </p>';
            }else {
                echo '<p class="error">ユーザーはシステムエラーのため、編集できませんでした。</p>';
                echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>';


            }
        } else {
            echo '<p class="error">エラー<p>';
        }
    }
}
$q = "SELECT first_name, last_name, email FROM users WHERE user_id=$id";
$r = @mysqli_query($dbc, $q); 

if (mysqli_num_rows($r) == 1) {
    $row = mysqli_fetch_array($r, MYSQLI_NUM); 

    echo '<form action="edit_user.php" method="post">
    <p>First Name: <input type="text" name="first_name" size="15" maxlength="15" value="' . $row[0] . '" /></p>
    <p>Last Name: <input type="text" name="last_name" size="15" maxlength="15" value="' . $row[1] . '" /></p>
    <p>Email Address: <input type="text" name="email" size="15" maxlength="15" value="' . $row[2] . '" /></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
    <input type="hidden" name="id" value="' . $id . '" />
    </form>';
} else {
    echo '<p class="error">This page has been accessed in error.</p>';
}
mysqli_close($dbc);

include ('includes/footer.html');
 ?>
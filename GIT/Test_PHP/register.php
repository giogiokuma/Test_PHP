<?php # Script 9.5

$page_title = 'Register'; 
include ('includes/header.html'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require('../../mysqli_connect.php');

    $errors = array(); 

    if (empty($_POST['first_name'])) {
        $errors[] = 'You forgot to enter your first name'; 
    } else {
        $fn = mysqli_real_escape_string($dbc, trim($_POST['first_name'])); 
    }

    if (empty($_POST['last_name'])) {
        $errors[] = 'You forgot to enter your last name';
    } else {
        $ln = mysqli_real_escape_string($dbc, trim($_POST['last_name'])); 
    }

    if (empty($_POST['email'])) {
        $errors[] = 'You forgot to enter your email address'; 
    } else {
        $e = mysqli_real_escape_string($dbc, trim($_POST['email']));
    }

    if (empty($_POST['pass1'])) {
        if ($_POST['pass1'] != $_POST['pass2']) {
            $errors[] = 'Your password did not mutch the confirmed password';
        } else {
            $p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
        }
    } else {
        $errors[] = 'You forgot to enter your password'; 
    }

    if (empty($errors)) {
        $q = "INSERT INTO users (first_name, last_name, email, pass, registration_date) VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW() )";       
        $r = @mysqli_query ($dbc, $q); // Run the query.


        if ($r) {
            echo '<h1>Thank you!</h1>
            <p>You are now registered.</p>';
        } else {
            echo '<h1>System Error</h1>
            <p class="error">You could not be registered due to system error. We apologize for any inconvinience.</p>';

            echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';            
        }

        mysqli_close($dbc); 

        include('includes/footer.html'); 
        exit(); 


    } else {
        echo '<h1>Error!</h1>
        <p class="error">The forllowing error(s) occured: <br />';
        foreach($errors as $msg) {
            echo " - $msg<br />\n";
        }

        echo '</p><p>Please try again.</p><p><br /></p>';
    }

    mysqli_close($dbc); 
}

 ?>

 <h1>Register</h1>
 <form action="register.php" method="post">
    <p>First Name: <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"></p>    
    <p>Last Name: <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"></p>
    <p>Email Address: <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"></p>
    <p>Password: <input type="password" name="pass1" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>"></p>
    <p><input type="submit" name="submit" value="Register" /></p>
 </form>

<?php include ('includes/footer.html') ?>
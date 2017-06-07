<?php 

define('TITLE', 'Login'); 
include('templates/header.html');

print '<h2>Login Form</h2>
<p>Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';  


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {
        if ( (strtolower($_POST['email']) == 'ohata@raijin.com') && ($_POST['password'] == 'testpass') ) {
            print '<p class="text--success">You are logged in! <br /> Now you can blah, blah, blah...</p>'; 
        } else {
            print '<p class="text--error">The submitted email address and password do not match those an file!</p>'; 

        }
    } else {
        print '<p class="text--error">Please make sure you enter botrh and email address and a password!</p>'; 
    }
} else {
    print '<form action="login.php" method="post" class="form--inline">
    <p><label for="email">Email Address: </label><input type="email" name="email" size="20"></p>
    <p><label for="Password"> Password: </label><input type="password" name="password" size="20"></p>
    <p><input type="submit" name="submit" value="Log In!" class="button--pill"></p>
    </form>'; 
}

include ('templates/footer.html');



 ?>
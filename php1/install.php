<?php
    session_start();
    if(isset($_POST['Submit'])){
        if($_POST['password'] === $_POST['retype']){
            $file = '../Admin/admin.txt';
            $user = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            file_put_contents($file, "$user, $password");
        }
        else {
            echo('Error please check your retype password!');
        }
    }
?>
   
<html>
    <body>
        <form method="post" action="install.php">
            Username:
            <input type="text" name="username" placeholder="Username">
            Password:
            <input type="password" name="password" placeholder="Password">
            Retype-Password:
            <input type="password" name="retype" placeholder="Retype Password">
            <input type="submit" name="Submit">
        </form>
    </body>
</html>
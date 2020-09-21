<?php
session_start();
if(isset($_POST['login-submit']))
{ 
    require 'dbh.inc.php';

    $username = $_POST['user'];
    $password = $_POST['pass'];

    if (empty($username) || empty($password))
    {
        header("Location: ../login.html");
        exit();
    }
    else 
    {
        $sql = "SELECT * FROM account WHERE auser='$username' AND apass='$password'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck == 1)
        {
            $_SESSION['user'] = $username;
            header("Location: ../index.php");
        }
        else
        {
            header("Location: ../login.html");
        }
    }
}

else
{
    header("Location: ../login.html");
}


?>


<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST['username'];
        $password= $_POST['psw'];
        if($username == 'ahmad' && $password == 'asd'){
            echo "hi $username";
            $_SESSION['sign']= $username;}
        else
            echo "you are not register ";
    }
header("Location: layout.php");
?>

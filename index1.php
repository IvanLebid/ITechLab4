<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = $_POST["login"];
        $password = $_POST["password"];

        $correctUserInfo = "currentUser.txt";
        
        $allInfo = file($correctUserInfo, FILE_IGNORE_NEW_LINES);
        $correctLogin  = $allInfo[0];
        $correctPassword = $allInfo[1];

        if($login == $correctLogin && $password == $correctPassword ){
            echo("signed in");
        }else if ($login != $correctLogin && $password == $correctPassword){
            echo("invalid login");
        }else if ($login == $correctLogin && $password != $correctPassword){
            echo("invalid password");
        }else{
            echo("invalid login and password");
        }
      
    }
?>
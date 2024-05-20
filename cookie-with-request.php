<form method="post">
    <input type="text" placeholder="Enter your name" name="username"/>
    <br/>
    <br/>
    <button name="button" value="set">Set Cookie</button>
    <br/>
    <br/>
    <button name="button" value="display">Display Cookie</button>
    <br/>
    <br/>
    <button name="button" value="delete">Delete Cookie</button>
    <br/>
    <br/>
<form>


<?php

if(isset($_POST["button"]))
{
    if($_POST["button"]=="set")
    {
        $uName= $_POST["username"];
        setcookie("username", $uName, time()+10000);
        echo "Cookie is set";
    }

    if($_POST["button"]=="display")
    {
        if(isset($_COOKIE["username"]))
        {
            echo $_COOKIE["username"];
        }
    }

    if($_POST["button"]=="delete")
    {
        if(isset($_COOKIE["username"]))
        {
            // unset($_COOKIE["username"]);
            setcookie("username", null, -1);
        }
    }
}
?>
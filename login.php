<?php

if($_GET)
{
echo "Username is " .$_GET["username"];
echo "<br>";
echo "User password is " .$_GET["password"];
echo "<br>";
echo "User age is " .$_GET["age"];
}
else{
    echo "No data in get request";
}
?>
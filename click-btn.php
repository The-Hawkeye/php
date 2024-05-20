<!DOCTYPE html>
<html lang="en">
<head>
    <title>Click Button</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" >Click Me </button>
    </form
</body>
</html>


<?php
 if(isset($_POST["button"]))
 {
    call_function();
    echo "Button Clicked";
 }


 function call_function()
 {
    echo "Function Called";
    // echo time();
    setcookie("fruit", "apple", time()+60*60);
 }
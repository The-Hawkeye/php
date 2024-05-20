<?php
echo "Hello";
echo "world";
$val = 20;
if($val+2==22)
{
    goto abc;
}

echo "skipped";


abc:
echo "not skipped";


?>
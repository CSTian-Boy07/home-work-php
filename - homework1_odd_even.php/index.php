<?php 

//if .. else statement

$num=13;
$check=$num%2;
if($check==0)
{
    echo "The Numbar is Even";
}
else{
    echo "The Numbar is Odd";
}

echo "<br>";

// switch Statement

$num=10;
$check=$num%2;
switch($num)
{
    case $check==0;
    echo "Even numbar";
    break;
    default:
    echo "Odd numbar";
}

?>
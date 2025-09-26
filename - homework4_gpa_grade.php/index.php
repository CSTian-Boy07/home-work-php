<?php  
$marks=1.00;
if($marks>=3.60 && $marks<=4.00)
{
    echo "Grade: A+";
}
elseif($marks>=3.20 && $marks<=3.59)
{
    echo "Grade: A";
}
elseif($marks>=2.80 && $marks<=3.19)
{
    echo "Grade: A-";
}
elseif($marks>=2.50 && $marks<=2.79)
{
    echo "Grade: B";
}
elseif($marks>=2.00 && $marks<=2.49)
{
    echo "Grade: C";
}
elseif($marks>=1.00 && $marks<=1.99)
{
    echo "Grade: D";
}
else{
    echo "Grade: F";
}

?>
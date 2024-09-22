<?php

$a = -5;
$b = -30;
$c = -60;

if($a>$b && $a >$c){
    echo($a.' is the maximum number.');
}
else if($b>$c && $b>$c){
    echo($b.' is the maximum number.');
}
else if($c>$a && $c>$b){
    echo($c.' is the maximum number.');
}
else if($a==$b || $a==$c || $b==$c){
    echo($a. $b. $c.' three values are same number.');
}
else{
    echo('please take the valid number .');
}


?>
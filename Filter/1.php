<?php
$var =false;
if( filter_var($var ,FILTER_VALIDATE_INT) ){
    echo "<br> $var varilable is integer";
}else{
    echo "<br> variable is not integer";
}
    ?>
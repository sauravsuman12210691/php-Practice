<?php
function multiply(& $matrix1, & $matrix2,& $res){
    for($i = 0;$i< count($matrix1); $i++){
        for($j=0; $j< count($matrix2); $j++){
            $res[$i][$j] = 0;
            for($k =0;$k<count($matrix1);$k++){
                $res[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }
    for($i = 0;$i < count($res);$i++){
       for($j=0;$j<count($res);$j++){
        echo $res[$i][$j];
        echo " ";
       } 
       echo "<br>";
    }
}
function transpose(& $matrix){
    $n = count($matrix);
    for($i = 0;$i < count($matrix);$i++){
        for($j=0;$j<count($matrix);$j++){
         echo $matrix[$j][$i];
         echo " ";
        } 
        echo "<br>";
     }
}
$matrix1 = array(
    array(1,1),
    array(2,2)
);
$matrix2 = array(
    array(1,1),
    array(2,2)
);
$matrix = array(
    array(1,2),
    array(3,4)

);
echo "Transopse of matrix";
echo "<br>";
transpose( $matrix);
echo "<br>";
echo "Multiplication of matrix";
echo "<br>";
multiply($matrix1,  $matrix2, $res);
?>
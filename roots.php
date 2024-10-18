<?php 
function solveQuadratic($a, $b, $c) { 
    $discriminant = $b**2 - 4*$a*$c; 
    if ($discriminant > 0) { 
        $root1 = (-$b + sqrt($discriminant)) / (2*$a); 
        $root2 = (-$b - sqrt($discriminant)) / (2*$a); 
        return [$root1, $root2]; 
    } else if ($discriminant == 0) { 
        $root = -$b / (2*$a); 
        return [$root]; 
    } else { 
        return []; // No real roots 
    } 
} 
// Driver code 
$a = 1; 
$b = -3; 
$c = 2; 
  
$roots = solveQuadratic($a, $b, $c); 
echo "Roots: " . implode(' ,  ', $roots); 
?>

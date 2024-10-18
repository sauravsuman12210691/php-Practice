<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
<?php
$car = array("volvo","BMW","Toyota");
//merging of array
$car1 = array("Audi","Mercedes");
// print_r(array_merge($car,$car1));
//merging using array_push

// array_push($car,$car1);
array_push($car,"Audi","Mercedes");
echo $car[2];
print_r($car);
var_dump($car);

?>
</pre>
</body>
</html>
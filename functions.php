<!DOCTYPE html>
<html>
<head>
<title>Testing Functions</title>
</head>
<body>

<?php

function mean() {
    $sum = 0;
    $param_count = func_num_args();
    for ($i = 0; $i < $param_count; $i++){
        $sum += func_get_arg($i);
    }
    $mean = $sum/$param_count;
    echo "Mean: $mean";
    return NULL;
}

mean(35, 43, 3);

function meanMethod(){
    $sum = 0;
    $vars = func_get_args();

    for ($i = 0; $i <count($vars); $i++){
        $sum += $vars[$i];
    }
    $mean = $sum/count($vars);
    echo "<p>Mean: $mean</p>";
    return NULL;
}

meanMethod(35, 43, 3);

function readArguments(){
    $argumentCount = func_num_args();
     echo ("<p>The number of arguments are $argumentCount</p>");
     //return NULL;
}  
readArguments(2, 5, 7);

$op2 = "blabla";

function myFunction($op1){
    global $op2;
    echo $op1;
    echo $op2;
}
myFunction("hello");

function foo ($msg) {
    echo "$msg";
}
$var1 = "foo";
$var1("will this work");

function foo1(){
$numargs = func_num_args();
echo "Number of arguements: $numargs\n";
if($numargs >= 2){
    echo "Second argment is:" . func_get_arg(1) . "/n";
}
}

foo1(9, 5, 2);











?>


</body>
</html>

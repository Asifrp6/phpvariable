<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

$cell="01771006007";
$name="Md. Asifur Rahman";

    // object

class phone{
    var $model;

    function phnmodel($number){
        global $model;
        $model= $number;
        echo "This is $model <br>";

    }
}

$iphon= new phone;
$iphon -> phnmodel('Iphone 15 pro max');





function name(){
    global $sell;
    echo $sell;
}




function phone(){
    echo"01771006007";
}

function office(){
    echo $GLOBALS['name'];
}

name();
phone();
office();

?>
</body>
</html>
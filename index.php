<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

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

?>
</body>
</html>
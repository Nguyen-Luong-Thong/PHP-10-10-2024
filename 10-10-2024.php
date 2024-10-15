<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .demo{
            color: red;
            font-size:30px;
        }
        p{
            display:flex;
            background-color:yellow;
            justify-content:center;
        }
        .divi{
            width: 80px;
            height: 80px;
            background-color:yellow;
            margin:10px;
            display:inline-flex;
            justify-content:center;
            align-items:center;
        }
    </style>

    <?php
    $sum;
    for($i=0;$i<5;$i++){
        for($j=0;$j<10;$j++){
            $sum = $i*10+$j;
            echo("<div class='divi'> <p>${sum}</p></div>");
            if($j==9){
                echo("<br>");
            }
        }
    }
    echo("<br>");
    $sum1=0;$sum1c=0;$sum1l=0;
    for($i=0;$i<9;$i++){
        if($i%2==0){
            $sum1c+=$i;
            $sum1+=$i;
        }else{
            $sum1l+=$i;
            $sum1+=$i;
        }
    }
    echo("Tong la: ${sum1}");
    echo("<br>");
    $sk=0;
    $sum2=0;$sum2c=0;$sum2l=0;
    while($sk<10){
        if($sk%2===0){
            $sum2c+=$sk;
            $sum2+=$sk;
        }else{
            $sum2l+=$sk;
            $sum2+=$sk;
        }
        $sk+=1;

    }
    echo("Tong: ${sum2}, tong le: ${sum2l}. tong chan: ${sum2c}");
    echo("<br>");
    $listAnimal =["dog","cat","mours","birt","tiger"];
    foreach($listAnimal as $index => $element){
        echo("Index ${index} is value ${element}."."<br>");
    }
    ?>
</body>
</html>
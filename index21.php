<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of Even or Odd</title>
</head>
<body>
    <h1>Write the Table with Even and Odd Multiplication</h1>
    <form action="#" method="POST">
        <label>Enter your number</label>
        <input type="text" name="n1">
        <label>To which Number? Want it to multiply with Even or Odd?</label>
        <input type="text" name="n2">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

//FOR LOOP
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    if($n2%2==0){
    for ($i=2;$i%2==0;$i++ && $i++){
        $result = $n1 * $i;
        echo $n1 . " x " . $i . " = " . $result;   
        echo "<br>";  
        if($i==$n2){
            break;
        }
        }
    }else{
        for($i=1;$i<=$n2;$i++ && $i++){
            $result = $n1 * $i;
            echo $n1 . " x " . $i . " = " . $result;
            echo "<br>";
        }
    }
    }

//WHILE LOOP
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    if($n2%2==0){
        $i = 2;
    while($i%2==0){
        $result = $n1 * $i;
        echo $n1 . " x " . $i . " = " . $result;   
        echo "<br>";
        $i++ && $i++;
        if($i==$n2){
            $result = $n1 * $i;
            echo $n1 . " x " . $i . " = " . $result;   
            break;
        }
    }
    }else{
        $i = 1;
        while($i<=$n2){
            $result = $n1 * $i;
            echo $n1 . " x " . $i . " = " . $result;
            echo "<br>";
            $i++ && $i++;
        }
    }
    }


//DO WHILE LOOP
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    if($n2%2==0){
        $i = 2;
    do{
        $result = $n1 * $i;
        echo $n1 . " x " . $i . " = " . $result;   
        echo "<br>";
        $i++ && $i++;
        if($i==$n2){
            $result = $n1 * $i;
            echo $n1 . " x " . $i . " = " . $result;   
            break;
        }
    }while($i%2==0);
    }else{
        $i = 1;
        do{
            $result = $n1 * $i;
            echo $n1 . " x " . $i . " = " . $result;
            echo "<br>";
            $i++ && $i++;
        }while($i<=$n2);
    }
}
?>

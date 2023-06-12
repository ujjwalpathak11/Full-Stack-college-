<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE-Edge">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title> swap php </title>
</head>
<body>
    <form method="POST">
    <h1>Enter num1</h1>
    <input type="number"name="num1">
    <h1>Enter num2</h1>
    <input type="number"name="num2">
    <br><br>
    <input type="submit" name="submit" value="done">
    </form>
<?php
    if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        echo "Before swapping :",$num1, $num2;
        $temp;
        $temp=$num1;
        $num1=$num2;
        $num2=$temp;
        echo "After swapping :",$num1, $num2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE-Edge">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title> swap php </title>
</head>
<body>
<?php
    $a=1.99;
    echo gettype($a);
    settype($a,"int");
    echo " ";
    echo gettype($a);
?>
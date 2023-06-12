<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title> FIND MAX USING PHP  </title>
    </head>
    <body>
        <form method="post">
            <h1>Enter number1</h1>
            <input type="number" name="num1">
            <h1>Enter number2</h1>
            <input type="number"  name="num2">
            <h1>Enter number3</h1>
            <input type="number"   name="num3">
            <br>
            <br>
            <input type="submit" name="submit" value="find max">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $num3=$_POST['num3'];
            $max;
            if($num1 > $num2)
            {
                $max=$num1;
            }
            else
            {
                $max=$num2;
            }
            if($max<$num3)
            {
                $max=$num3;
            }
            echo "maximum num is :",$max;
        }
        ?>
    </body>
</html>

<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title> ODD EVEN USING PHP  </title>
    </head>
    <body>
        <form method="post">
            <h1>Enter number1</h1>
            <input type="number" name="num">
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $num=$_POST['num'];
            if($num%2==0)
            {
                echo $num ,"is even number";
            }
            else
            {
                echo $num ,"is odd number";
            }
        }
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
    </head>
    <body>
        <h1 align="center"> ELECTRICITY BILL </h1>
        <div align="center">
            <?php
                if(isset($_POST['submit'])){
                    $number = $_REQUEST['cnumber'];
                    $name = $_REQUEST['cname'];
                    $prevread = $_REQUEST['prevread'];
                    $presread = $_REQUEST['presread'];
                    $units = $presread-$prevread;
                    if($units<100){ $amt = 3*$units; }
                    elseif($units>=100 && $units<200){ $amt = 4*$units; }
                    else if($units>=200 && $units<=300){ $amt=5*$units; }
                    else{ $amt=6*$units; }
echo "Consumer Number: $number"."<br>"."Consumer Name: $name"."<br>";
                    echo "Previous Reading: $prevread"."<br>"."Present Reading: $presread"."<br>";
                    echo "Units Consumed: $units"."<br>"."Amount: $amt"."<br>";
                }
            ?>
        </div>
    </body>
</html>
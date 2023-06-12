<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Electricity Bill</title>
        <style>
            label{
                margin-right: 15%;
            }
            form{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1 align="center">ELECTRICITY BILL</h1>
        <div>
            <form action="electricitybilloutput.php" method="post">
                <label>Enter the consumer number: </label>
                <input type="text" name="cnumber"><br><br>
                <label>Enter the consumer name: </label>
                <input type="text" name="cname"><br><br>
                <label>Enter the previous reading: </label>
                <input type="text" name="prevread"><br><br>
                <label>Enter the present reading: </label>
                <input type="text" name="presread"><br><br>
                <input type="submit" name="submit">
            </form>
            
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<form method=>, initial-scale=1.0">
    <title>Document</title>
    <style>
        .triangle{
            align:center;
            background-color:grey;
            margin:auto;
            padding:10px;
            width:340px;
        }
    </style>
</head>
<body>
    
    <div class="triangle">
    <h2 align="center">Calculate angle of triangle</h2>
    <form method="post">

        <label>Angle A of triangle</label><input type="text" name="a"/><br>        

        <label>Angle B of triangle</label><input type="text" name="b"/>
        
        <div>
        <button type="submit">Calculate</button>
        </div>
    </form>
    </div>
    <?php
        $a=$_POST["a"];
        $b=$_POST["b"];
        $c=180-($a+$b);
        echo "Angle C of triangle is ".$c;
    ?>
</body>
</html>
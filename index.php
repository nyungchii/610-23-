<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
<body>
    <?php 
        $a = 3;
        $b = 4;
        $c = $a + $b;

        $B = 20.5;

        echo "ค่าของ \$a คือ ".$a."<br>";
        echo "ค่าของ \$b คือ ".$b."<br>";    
        echo "ผลรวมของ \$a และ \$b คือ ".$c."<br><br>";

        echo "\$A = \$B<br>";
        echo "$\$A = \$B <br>";    
        echo "\$B = $B";

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <?php
    include "front.html"
    ?>
<form action="calculator.php" method="post">
Operand-<input type="text" name="first">
<br>
2.Operator-<input type=" text" name="operator"><br>
3.Operand-<input type="text" name="second">
<input type="submit">
</form>
<?php
$num1=$_POST["first"];
$opr=$_POST["operator"];
$num2=$_POST["second"];
if($opr=="+")
echo $num1+$num2;
else if($opr=="-")
echo $num1-$num2;
else if($opr=="/")
echo $num1/$num2;
else if($opr=="*")
echo $num1*$num2;
else echo "wrong operator";
?>
</body>
</html>
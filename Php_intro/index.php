<html>
<head>
<body>
<h1>This is from plain html</h1>
<h1><?php echo "This is from php";?></h1>
<h1><?php echo sum(10,25);?></h1>
<h1><?php print_hello(); ?> </h1>
</body>
</head>

</html>
<?php
$x=10;
$y=12;
$z=$x + $y;
function print_hello()
{echo "<b><i> Hello php </i></b>";}
function sum($x,$y)
{return $x+$y;}
echo "Hello World<br>";
echo 'Hello World<br>';
echo '<h1> Hello World </h1>';

echo "The addition is $z<br>";

echo "The addition is " .$z. "<br>";
$name = "Sharmili Jui";
echo "The length of $name is" .strlen($name); 
$pos= strpos($name,"i");
echo "The position os i is $pos" ;
$pos2= strpos($name,"i",$pos+1);
echo "The position os i is $pos2" ;
$c=10;
$d="10";
if($c==$d)  //=== identical (value + type check kore} switch identical check kore)
{echo "<br>same";}
else { echo "<br>not same";}
?>
<?php
$arr= array("Mahfuza","Sharmili");
$arr2= array(); //empty array
$arr3=[];//empty array
$arr2[0]=1;
$arr2[1]=2;

$arr3[]="123";
$arr3[]="132";
$arr3[]="150";

for($i=0;$i<count($arr3);$i++)
{echo $arr3[$i] . "<br>";}

foreach($arr3 as $v)
{echo "$v<br>";}

//associative array
$arr4=array();
$arr5=[];
$arr6=array("Jui"=>90);

$arr4["Jui"]=34;//key has to be unique and string
$arr4["Mahfuza"]=01;

echo $arr4["Jui"];


?>
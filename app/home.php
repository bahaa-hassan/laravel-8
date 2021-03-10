<?php
$ar = array('mohmmed','alagha');
/*
echo 'mohmmed';
print('mohmmed');
*/
//print_r($ar); //text , array and opject

$m = array(
    array('id'=>801853843,'name'=>'mohmmed alagha','age'=>32),
    array('id'=>801853843,'name'=>'mohmmed alagha','age'=>32),
    array('id'=>801853843,'name'=>'mohmmed alagha','age'=>32),
    array('id'=>801853843,'name'=>'mohmmed alagha','age'=>32),
    array('id'=>801853843,'name'=>'mohmmed alagha','age'=>32),
    array('id'=>801853843,'name'=>'mohmmed alagha','age'=>32),
    array('id'=>801853843,'name'=>'mohmmed alagha','age'=>32),
);

foreach ($m as $row){
    echo "My name is : ".$row['name'] . " My age : ".$row['age'].'<br>';
}
<?php 

$para = "php is a OOP Language";
/* for($i=0 ; $i<=strlen($para) ; $i++){
    echo "$para\n";
} */
/* $i = 0;
while($i<=strlen($para)){
    echo $para[$i];
    $i++;

} */

//$a = (string)readline('Enter your name: ');
/* $i = strlen($a)-1;
while($i>=0){
    echo $a[$i];
    $i--;
}  */

$name = (string)readline('Enter your name: ');
//echo strlen($name); 
/* echo "$name\n";
echo strtoupper($name);
echo strtolower($name); */

do{
    $i = strlen($name)-1;
    echo $name[$i];
    $i--;
}while($i>=0);




?>
<?php 
$variable = null;
 $value='b';
$variable = $value ;
switch ($variable) {
    case 'a':
        # code...
        echo"hello php1";
      

      case 'b' : 
       echo"hello php2"."<br>";
    default:
        # code...
        break;
}

for ($i = 0 ; $i<=10 ; $i++){

echo $i ."<br>" ;

}



$j=0;
while($j <= 20 ){
if($j%2 == 0)
{
echo "even number" .$j ."<br>";
}





$j++;
}

$grade = 100;

if($grade >= 90 && $grade <= 100)
{
    echo "A: " . $grade ."<br>";
} else if($grade >= 80)
{
    echo "B: " . $grade ."<br>";
} else if($grade >= 70)
{
    echo "C: " . $grade;
} else 
{
    echo "Fail: " . $grade ."<br>";
}


 function squr($num) {
    echo "squre of number:" .pow($num , 2) ."<br>";


 } 
 squr(2);
 squr(3);
?>

<?php
// class MathOperations {
//     function sum(){
//         return 10+20;
//     }
// }

// $maths = new MathOperations();
// echo $maths->sum();
?>

<?php
class MathOperations {
    function sum($a, $b){
        return $a+$b;
    }

    function mul($a, $b){
        return $a*$b;
    }
}

$maths = new MathOperations();
echo $maths->sum(20,30);
echo "<br/>";
echo $maths->sum(100,23); 

$maths1 = new MathOperations();
echo "<br/>";
echo $maths1->sum(100,90);

$maths2 = new MathOperations();
echo "<br/>";
echo $maths2->mul(3,8);
?>
<?php
function saymyname(){
    echo "wakalaite";
};
saymyname();
function play($x=-1){
    echo $x;
}
echo '<br>';
play(8-2);
echo"<br>";
$marks= array(45,78,98,90,76,45,34,67,89);
function sum($marks){
    $sumof =array_sum($marks);
    $no =count($marks);
    echo($sumof/$no);

}
sum( $marks);
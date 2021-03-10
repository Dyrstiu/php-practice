<?php
echo "print 0 t0 20 skipping 2";
$x=0;
while ($x<= 20){
    echo" <br>";
    $x+=1 ;
    if($x%2 == 0){
        echo "$x is even";

    }elseif($x%2 == 1){
        echo "$x is odd";


    }
    
   
}
echo "<hr>";
    $salaries= array('jane'=>"2000",'peter '=> "10000",'john'=>"23000");
   echo" <table> 
        <th>Name Of Employee</th>
        <th> Salary </th>";
    foreach($salaries as $key => $value){
       # echo"$key is paid kshs$value per month" ."<br>";
        echo"
        
           
           <tr>
               <td> $key</td>
               <td>$value</td>
           </tr>
           
        
        
        ";
       

    }
    echo" </table>";
       


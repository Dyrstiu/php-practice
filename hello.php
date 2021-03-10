<?php
 echo "Hello world (1)";
 
 echo(10+2);
 echo "<br>";
 echo "name : Dyrstiu  <br>";
 $firstname = 'mutua';
 $secondname= 'wala';
 echo $firstname ;
 echo "<br>";
 echo$secondname;
 $fullname = $firstname."  " . $secondname ;
 echo "<br>";
 echo $fullname ; 
 $y = 10 ;
 $z =20 ;
 echo "x is greater than y ".  $y >$y ;
 echo"Display numbers from 1o to o <br>";
 $y=10;
 do{
     echo"$y <br>";
     $y--;

 }while( $y>=0);


  echo "<br>";
$counties = array("machakos","nairobi ", "mombasa","kisumu");
 //$i =0;
 /*while($i<4){
     echo" <ol>
        <li> $counties[$i]
     </ol>
     ";
     
     $i++;

 }*/
 echo" table <br>";
 $u=0;
 while($u<4){
    echo"<br>";
    echo"
    <table>
       
       <th>no.</th>
       <th>counties </th>
       <tr>
         <td> $u</td>
         <td> $counties[$u]</td>
       </tr>
       
    </table>
    ";
    $u++;
 };



 
?>

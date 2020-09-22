<html>
<p> Nama : Dinda Nabila Amartha</p>
<br>
<br>
<?php
//no 1
for($a=1; $a<=10; $a++){
for($i=1; $i<=$a; $i++){
    echo " &nbsp";
}
for($c=10; $c>=$a; $c-=1){
    echo "*";
}
echo "<br>";
}
//no 2
for ($i=1; $i<=10; $i++){
        echo "<center>";
        for ($d=$i; $d<=10; $d++) {
        echo "*";
        }
        echo "<br />";
        }
    <br>
    //no 3
        $a =5;
        for($b=$a-1; $b>=1; $b--){
            for($j=1;$j<=$a-$b;$j++){
                echo " ";
              for($j=1 ; $j<=$a ; $j++){
                  echo $j;
                  for($j=($a-1); $j>=1; $j--){
                      echo $j;
                  }
              }  //susah:( pak
            }
            
        
        }

?>
</html>
<?php
for ($i = 1; $i <= 100; $i++){
    echo " $i <br>" ;
 if ($i % 3 == 0){
     echo "$i = Foo <br>";
    
 }
 elseif ($i % 5 == 0){
    echo "$i = Bar <br>";
   
}
if ($i % 3 == 0 && $i % 5 == 0){
    echo "$i = FooBar <br>";
   
}
    

}

?>
<?php
extract($_POST);
print("hello ".$username);
print("<br/>");
$a =array("banana"=>10  , "orange"=>20 , "apple"=>30);
foreach($a as $i => $v)
{if($i ==$fruit)
    print("The price of ".$i. "is".$v);

}


?>
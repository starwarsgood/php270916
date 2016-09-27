<?php ## Обращение массива. 
$names = array( 
"Joel" => "Silver", 
"Grant" => "Hill", 
"Andrew" => "Mason", 
); 
$names = array_flip($names); 
print_r($names); 
// Array([Silver]=>Joel [Hill]=>Grant [Mason]=>Andrew) 
//////////////////////////////////////////////////////
 $tools = array( 
"а" => "Zero", 
"b" => "Weapon", 
"с" => "Alpha", 
"d" => "Processor" 
); 
asort($tools); 
print_r($tools); 
// Array([c]=>Alpha [d]=>Processor [b]=>Weapon [a]=>Zero) 
// как видим, поменялся только порядок пар ключ=>значение 

?> 


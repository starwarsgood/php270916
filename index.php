<?php ## ��������� �������. 
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
"�" => "Zero", 
"b" => "Weapon", 
"�" => "Alpha", 
"d" => "Processor" 
); 
asort($tools); 
print_r($tools); 
// Array([c]=>Alpha [d]=>Processor [b]=>Weapon [a]=>Zero) 
// ��� �����, ��������� ������ ������� ��� ����=>�������� 

?> 


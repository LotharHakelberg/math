<?php
function add($a,$b){
  return $a+$b;
}

$server=newSoapServer("math.wsdl");
$server->addFunction("add");
$server->handle();
?>

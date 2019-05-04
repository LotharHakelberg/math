<?php
functionadd($a,$b){
  return$a+$b;
}

$server=newSoapServer("math.wsdl");
$server->addFunction("add");
$server->handle();
?>

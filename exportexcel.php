<?php 
$excel=$_POST['export']; 
header("Content-type: application/vnd.ms-excel"); 
header("Content-disposition: attachment; filename=CierreCaja.xls"); 

print $excel; 
exit; 
?>

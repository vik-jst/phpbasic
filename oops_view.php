<?php
include_once 'application-top/crudclass.php';
echo "hello";
$obj2=new CRUD();
$obj2->read();
echo $this->row['emp_name'];
?>

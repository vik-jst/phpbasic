<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?><a class="btn btn-primary btn-sm" href="index.php">Go Back</a>
<?php include 'include/header.php';
echo "hello i m overriding";

class Parent_class{
    public function name(){
        echo "Hello i m in parent clasas";
    }
}
class Child_class extends Parent_class{
    public function name() {
        parent::name();
        echo "Hikkj";
    }
}
$obj1 = new Child_class();
$obj1->name();

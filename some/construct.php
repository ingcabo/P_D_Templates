<?php
class BaseClass {
   function __construct() {
       print "En el constructor BaseClass <br>";
   }
}

class SubClass extends BaseClass {
   function __construct() {
       parent::__construct();
       print "En el constructor SubClass <br>";
   }
}

class OtherSubClass extends BaseClass {
    // heredando el constructor BaseClass
}

// En el constructor BaseClass
$obj = new BaseClass();

// En el constructor BaseClass
// En el constructor SubClass
$obj = new SubClass();

// En el constructor BaseClass
$obj = new OtherSubClass();

?>
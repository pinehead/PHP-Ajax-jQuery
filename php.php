<?php

$name = $_POST['name'];
$email = $_POST['email'];


//Do whatever php code here that makes you happy.  
mail($email, $name, "Thank you");




?>
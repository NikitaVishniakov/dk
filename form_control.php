<?php
function pass_hash($password){
    $password = $password."b7g89";
    $password = hash('sha512', $password);
    $password = strrev($password);
    return $password;
}
   function obrabotka($string) {
    //$string = mysqli_real_escape_string($string);
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
    function value_return($value) {
        $val = $_POST[$value];
        if ($val) {
            echo $val;
        };
    }
   function control($var2,$var3) {
       if (isset($_POST[$var2])) { 
        $var1 = $_POST[$var2];
          $var1 = obrabotka($var1);
          if (strlen($var1) < 1) { 
            $_SESSION[$var2] = "<p> <span style='color:red'>Введите, пожалуйста, ".$var3."11</span></p>";
            $_SESSION['error'] = true;
            unset($var1);
            } 
           else {
               
               return $var1;
                
       }
           
       }
           else { 
               $_SESSION['error'] = true;
               $_SESSION[$var2] = "<p> <span style='color:red'>Введите, пожалуйста, ".$var3."</span></p>";
            unset($var1);
           }
       }
?>
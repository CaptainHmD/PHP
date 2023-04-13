<?php
//! set cookie
setcookie('name','hamad',time()+86400);//? key, value, expire date  time() os the current time


//get cookie
if(isset($_COOKIE['name'])){// check if there is a cookie
 echo $_COOKIE['name'];
}

?>

<?php

//Set the Cookie
setcookie("username", "suvam", time()+60*60*24);

//Check if the cookie exists
if(isset($_COOKIE['username'])){
    echo "cookie set with value " . $_COOKIE["username"];
}else{
    echo "Cookie not set!";
}

?>
<?php

session_start();

unset($_SESSION["c_id"]);

unset($_SESSION["c_name"]);

$BackToMyPage = $_SERVER['HTTP_REFERER'];
if(isset($BackToMyPage)) {
    header('Location: '.$BackToMyPage);
} else {
    header('Location: index.php'); // default page
}
   

?>
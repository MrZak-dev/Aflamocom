<?php

$db_login = array('host' => 'localhost','user' => 'MrWho','password' => 'MrWho618069','db_name' => 'aflamocom');
$connect = mysqli_connect ($db_login['host'],$db_login['user'],$db_login['password'],$db_login['db_name']);
if(! $connect){
  die ("DataBase Connection ERROR");
}
?>

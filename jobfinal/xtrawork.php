<?php

mysql_connect('localhost','root','');


mysql_select_db('infotsav');


$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$salt = $_POST['salt'];
$contact = $_POST['contact'];
$school = $_POST['school'];
$city = $_POST['city'];
$avatar = $_POST['avatar'];
$emailcode = $_POST['emailcode'];
$active = $_POST['active'];
$fbid = $_POST['fbid'];



$query = "INSERT INTO `users` VALUES('$name','$email','$password','$salt','$contact','$school','$city','$avatar','$emailcode','$fbid')";
$run = mysql_query($query) or die('fail');





?>
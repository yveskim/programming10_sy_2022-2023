<?php

$users = array("george", "john", "jane", "mike");
$pass = array("1234", "password", "qwerty");

$username = $_POST['username'];
$password = $_POST['password'];

$user_acc = "";
$user_pass = "";
foreach ($users as $data) {
  if ($username === $data) {
    $user_acc = $username;
    break;
  }
}

foreach ($pass as $data) {
  if ($password === $data) {
    $user_pass = $password;
    break;
  }
}

if (!empty($user_acc) && !empty($user_pass) ) {
  echo "login successfull";
}else {
  echo "login failed, user or password not exist!...";
}
// echo "username: ". $user_acc;
// echo "<br/>";
// echo "password: ". $user_pass;

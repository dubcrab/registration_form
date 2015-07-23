<?php

if (!empty($_POST['post_login']) && !empty($_POST['post_password1']) && !empty($_POST['post_password2'])) {
  if ($_POST['post_password1'] === $_POST['post_password2']) {

    $login = $_POST['post_login'];
    $password = $_POST['post_password1'];

    $user_login[] = "$login";
    $user_password["$login"] = "$password";
    var_dump($user_login);
    var_dump($user_password);
    echo 'Вы арегестрированы!';

  } else {
    echo 'ошибка при повторе пароля';
  }
} else {
  echo 'empty';
}

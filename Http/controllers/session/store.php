<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

if ((new Authenticator)->attempt($attributes['email'], $attributes['password'])) {
    redirect('/');
}

$form->error('email', 'No matching account found for that email address and password.');

Session::flash('errors', $form->errors());
Session::flash('old', [
    'email' => $email
]);

redirect('/login');

exit();
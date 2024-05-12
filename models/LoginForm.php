<?php

namespace app\models;

use faizavel\mvc\Model;
use faizavel\mvc\Application;
use faizavel\mvc\DbModel;
class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED,self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Password'
        ];
    }



    public function login()
    {
        $user = (new User())->findOne(['email' => $this->email]);
        if(!$user){
            $this->addError('email','Invalid email or password');
            return false;
        }
        if(!password_verify($this->password,$user->password)){
            $this->addError('password','Invalid email or password');
            return false;
        }
        return Application::$app->login($user);
    }
}
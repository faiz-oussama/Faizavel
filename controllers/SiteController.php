<?php

namespace app\controllers;

use faizavel\mvc\Application;
use faizavel\mvc\Controller;
use faizavel\mvc\Request;

class SiteController extends Controller
{
    
    public function home()
    {
        $params = [
            'name' => 'Faiz'
        ];

        return $this->render('home',$params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body = Application::$app->request->getBody();
    }
}

<?php

namespace app\Controllers;

use app\Models\User;
use corepackage\phpmvc\Request;
use corepackage\phpmvc\Response;
use corepackage\phpmvc\Controller;
use corepackage\phpmvc\Application;
use app\Models\LoginForm;
use corepackage\phpmvc\middlewares\AuthMiddleware;

class authController extends Controller{

    public function __construct(){
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response){
        $loginForm = new LoginForm();
        if($request->isPost()){
            $loginForm->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login()){
                $response->redirect('/');
                return;
            }
        }

        
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }
    public function register(Request $request){
        $user = new User();

        if ($request->isPost()){
            
            $user->loadData($request->getBody());
            // echo "<pre>";
            // var_dump($user);
            // echo "</pre>";
            // exit;
            
            if ($user->validate() && $user->save()){
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                exit;
            }
            // echo "<pre>";
            // var_dump($user->errors);
            // echo "</pre>";
            // exit;
            
            return $this->render('register', [
                'model' => $user
            ]);

        }

        $this->setLayout('auth');
        return $this->render('register', [
                'model' => $user
        ]);
        
    }
    public function logout(Request $request, Response $response){
        Application::$app->logout();
        $response->redirect('/');
    }
    public function profile(){
        
        return $this->render('profile');
    }
}
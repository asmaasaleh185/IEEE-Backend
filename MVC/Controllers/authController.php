<?php

namespace app\Controllers;

use app\core\Request;
use app\core\Controller;
use app\Models\RegisterModel;

class authController extends Controller{
    public function login(){
        $this->setLayout('auth');
        return $this->render('login', $params=0);
    }
    public function register(Request $request){
        $registerModel = new RegisterModel();
        if ($request->isPost()){
            $registerModel->loadData($request->getBody());
            if($registerModel->validate() && $registerModel->register()){
                return 'Success';
            }
            // echo '<pre>';
            // var_dump($registerModel->errors);
            // echo '</pre>';
            // exit;

            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
        // echo 'Register method called';
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }

}
<?php

namespace app\Controllers;

use app\core\Request;
use app\core\Controller;
use app\Models\registerModel;

class authController extends Controller{

    public function login(){
        $this->setLayout('auth');
        return $this->render('login');
    }
    public function register(Request $request){
        $registerModel = new registerModel();

        if($request->isPost()){
            
            $registerModel->loadData($request->getBody());
            // echo "<pre>";
            // var_dump($registerModel);
            // echo "</pre>";
            // exit;
            
            if ($registerModel->validate() && $registerModel->register()){
                return 'success';
            }
            // echo "<pre>";
            // var_dump($registerModel->errors);
            // echo "</pre>";
            // exit;
            
            return $this->render('register', [
                'model' => $registerModel
            ]);

        }

        $this->setLayout('auth');
        return $this->render('register', [
                'model' => $registerModel
        ]);
        
    }
}
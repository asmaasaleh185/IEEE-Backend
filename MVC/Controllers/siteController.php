<?php

namespace app\Controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class siteController extends Controller{
    public function home(){
        $params = [
            'name' => "TheCodeholic"
        ];
        return $this->render('home', $params);
    }
    public function contact(){
        // return Application::$app->router->renderView('contact');
        return $this->render('contact', $params=0);
    }
    public function handleContact(Request $request){
        $body = Application::$app->request->getBody();
        return 'Handling Submitted data';
    }
}
?>
<?php

namespace app\Controllers;

use app\core\Request;
use app\core\Controller;
use app\core\Application;

class siteController extends Controller{
    public function handleContact(Request $request){
        $body = $request->getBody();
        echo "<pre>";
        var_dump($body);
        echo "</pre>";
    return 'Handling submitted data';
    }

    public function contact(){
        return $this->render('contact');
    }
    public function home(){
        $params = [
            'name' => "TheCodeholic"
        ];
        return $this->render('home', $params);
    }
}
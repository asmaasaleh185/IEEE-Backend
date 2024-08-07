<?php

namespace app\Controllers;

use corepackage\phpmvc\Request;
use corepackage\phpmvc\Response;
use corepackage\phpmvc\Controller;
use corepackage\phpmvc\Application;
use app\Models\ContactForm;

class siteController extends Controller{

    public function contact(Request $request, Response $response){
        $contact = new ContactForm();
        if($request->isPost()){
            $contact->loadData($request->getBody());
            if ($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('success', 'Thanks for contacting us');
                return $response->redirect('/contact');
            }

        }
        return $this->render('contact', [
            'model' => $contact
        ]);
    }
    public function home(){
        $params = [
            'name' => "TheCodeholic"
        ];
        return $this->render('home', $params);
    }
}
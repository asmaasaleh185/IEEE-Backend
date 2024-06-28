<?php

namespace app\core\Form;

use app\core\Model;
use app\core\Form\Field;
// use app\Models\RegisterModel;


class Form{
    public static function begin($action, $method){
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end(){
        echo '</form>';
        
    }
    public function field(Model $model, $attribute){
        return new Field($model, $attribute);
    }
}
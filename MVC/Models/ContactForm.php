<?php

namespace app\Models;

use corepackage\phpmvc\Model;

class ContactForm extends Model{
    public $subject = '';
    public $email = '';
    public $body = '';

    public function rules(): array{
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED]
        ];
    }
    public function labels(): array{
        return [
            'subject' => 'Enter your subject',
            'email' => 'Your email',
            'body' => 'Body',
        ];
    }

    public function send(){
        return true;
    }
}
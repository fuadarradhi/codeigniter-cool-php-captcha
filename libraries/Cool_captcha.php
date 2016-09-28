<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cool_captcha {

    private $_captcha;

    public function __construct()
    {
        require APPPATH.'third_party/cool-php-captcha/captcha.php';
        $this->_captcha = new SimpleCaptcha();
        $this->_captcha->wordsFile = 'words/es.php';
        //$this->_captcha->session_var = 'cicaptcha';
        $this->_captcha->lineWidth = 1;
        //$this->_captcha->scale = 3; $captcha->blur = true;
        $this->_captcha->resourcesPath = APPPATH."third_party/cool-php-captcha/resources";
    }

    public function createImage()
    {
        $this->_captcha->CreateImage();
    }

}
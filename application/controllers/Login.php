<?php
defined('BASEPATH') or exit('No direct script access allowed');

// load base controller
require_once APPPATH . 'controllers/base/LoginBase.php';

class Login extends LoginBase
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->template->load('login');
    }
}

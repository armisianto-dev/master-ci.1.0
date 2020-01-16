<?php
defined('BASEPATH') or exit('No direct script access allowed');

// load base controller
require_once APPPATH . 'controllers/base/OperatorBase.php';

class Welcome extends OperatorBase
{
    public function index()
    {
        $this->template->js($this->themesFolder . '/plugins/select2/js/select2.full.min.js');
        $this->template->css($this->themesFolder . '/plugins/select2/css/select2.min.css');

        // Load View
        $this->template->load('welcome_message');
    }
}

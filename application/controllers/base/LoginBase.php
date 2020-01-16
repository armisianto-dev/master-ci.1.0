<?php
class LoginBase extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Set Template
        $this->template->set('layouts/nifty/main-login');

        $this->load_plugins();
    }

    // Load General Plugins
    public function load_plugins()
    {

    }
}

<?php
class OperatorBase extends CI_Controller
{

    protected $themesFolder = 'assets/themes/nifty';

    public function __construct()
    {
        parent::__construct();

        // Set Template
        $this->template->set('layouts/nifty/main');

        $this->load_plugins();
    }

    // Load General Plugins
    public function load_plugins()
    {
        // Load JS
        $this->template->js($this->themesFolder . '/plugins/bootstrap-select/bootstrap-select.min.js');

        // Load CSS
        $this->template->css($this->themesFolder . '/plugins/bootstrap-select/bootstrap-select.min.css');
    }

    public function load_variabels()
    {

    }
}

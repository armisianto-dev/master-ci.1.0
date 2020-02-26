<?php
class OperatorBase extends CI_Controller
{
    protected $themesFolder = 'assets/themes/nifty';
    protected $setSelectedUser = 'USERDUMMY1';

    public function __construct()
    {
        parent::__construct();

        $data['selected_user'] = $this->setSelectedUser;
        // Set Template
        $this->template->set('layouts/nifty/main', $data);

        $this->load_plugins();
    }

    // Load General Plugins
    public function load_plugins()
    {
        // Load JS
        $this->template->js($this->themesFolder . '/plugins/bootstrap-select/bootstrap-select.min.js');
        $this->template->js('node_modules/socket.io-client/dist/socket.io.js', 'top');

        // Load CSS
        $this->template->css($this->themesFolder . '/plugins/bootstrap-select/bootstrap-select.min.css');
    }

    public function set_selected_user($selected_user){
        $this->setSelectedUser = $selected_user;

        $data['selected_user'] = $this->setSelectedUser;
        $this->template->setData($data);
    }

    public function load_variabels()
    {

    }
}

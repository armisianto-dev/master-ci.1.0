<?php
defined('BASEPATH') or exit('No direct script access allowed');

// load base controller
require_once APPPATH . 'controllers/base/OperatorBase.php';

class Socketio_notification extends OperatorBase
{
    public function index()
    {
        $this->template->js('node_modules/socket.io-client/dist/socket.io.js', 'top');

        $userid = $this->input->get_post('userid');

        $data['selected_user'] = $userid ? $userid : 'USERDUMMY1';

        // Load View
        $this->template->load('features/socketio_notification/index', $data);
    }

    public function send_notification(){

    	$title = $this->input->get_post('title');
    	$message = $this->input->get_post('message');

		

		$data['title'] = $title;
		$data['message'] = $message;

		echo json_encode(array('status' => 200, 'message' => 'success')); exit();
    }
}

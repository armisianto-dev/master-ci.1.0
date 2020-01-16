<?php
defined('BASEPATH') or exit('No direct script access allowed');

// load base controller
require_once APPPATH . 'controllers/base/OperatorBase.php';

class Pusher_notification extends OperatorBase
{
    public function index()
    {
        $this->template->js('https://js.pusher.com/5.0/pusher.min.js', 'top');

        // Load View
        $this->template->load('features/pusher_notification/index');
    }

    public function send_notification(){

    	$title = $this->input->get_post('title');
    	$message = $this->input->get_post('message');

		$options = array(
		   'cluster' => 'ap1',
		   'useTLS' => true
		);
		$pusher = new Pusher\Pusher(
		   '24a1a5298f0c9aa416d8',
		   '4999bd152a17377d5005',
		   '932719',
		   $options
		);

		$data['title'] = $title;
		$data['message'] = $message;
		$pusher->trigger('notification', 'push-notification', $data);

		echo json_encode(array('status' => 200, 'message' => 'success')); exit();
    }
}

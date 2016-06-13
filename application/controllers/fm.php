<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fm extends CI_Controller {

	private $head;

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('fm_view');
	}

	public function random()
	{
		$song = $this->fm_model->random();
		foreach ($song as $value)
		{
			echo json_encode( array( "id" => $value['id'], "name" => $value['name'], "url" => $value['url'], "img" => $value['img'] ) );
		}
	}
}
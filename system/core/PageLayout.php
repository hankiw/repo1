<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_PageLayout extends CI_Controller
{
    private $assign_data = array();

	public function __construct()
	{
		parent::__construct();
	}

    public function layoutView($view = null)
    {
        $this->load->view('template/header');
        if ($view)
            $this->load->view($view, $this->assign_data);
        $this->load->view('template/footer');
    }

    public function assign($key, $value)
    {
        $this->assign_data[$key] = $value;
    }
}

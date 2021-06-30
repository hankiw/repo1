<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_PageLayout
{
	public function index()
	{
		$this->assign('test', 'hello ci');
        $this->layoutView('main_message');
	}

	public function test()
	{
		$this->layoutView('test');
	}
}
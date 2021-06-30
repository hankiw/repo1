<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends PageLayout
{
	public function index()
	{
		$this->assign('test', 'hello ci');
        $this->layoutView('main_message');
	}
}
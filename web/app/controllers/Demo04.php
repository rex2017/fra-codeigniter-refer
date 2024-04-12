<?php
/**
 * Demo04 缓存
 */

class Demo04 extends CI_Controller {
	
	//http://localhost:8024/demo04
	public function index() {		
		echo 'This is Demo04';
		$this->output->cache(10);
	}
	
	

}
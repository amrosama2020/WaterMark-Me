<?php

App::uses('AppController', 'Controller');

/**
 * watermark controller.
 * 
 * handles the images upload, watermark, and generating the zip file
 * 
 * This file will render views from views/watermark/
 * 
 * @package       app.Controller
 */
 
class WatermarkController extends AppController {

	/**
	 * Controller name
	 *
	 * @var string
	 */
	public $name = 'Watermark';

	/**
	 * Default helper
	 *
	 * @var array
	 */
	public $helpers = array('Html', 'Session');

	/**
	 * This controller does not use a model
	 *
	 * @var array
	 */
	public $uses = array();

	/**
	 * Displays the upload view
	 *
	 * @return void
	 */
	public function index(){
		$this->set("js",array(
				"watermark.js"
			)
		);
		
	}

}

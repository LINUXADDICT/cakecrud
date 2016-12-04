<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	//public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */

/**
 * Displays a view
 *
 * @param mixed AJAX page to display
 */
	public $helpers = array('Html', 'Form','Session','Ajax');
	public $components = array('Session','RequestHandler','Filter');

	public $uses = array('Page','User','User');
	
	public function beforeFilter() {
		parent::beforeFilter();
	}
	
	public function admin_home($page = null) {
		$this->admin_checkSession();
		$this->layout = 'admin_default';
		$this->set('title_for_layout', 'Dashboard');
		$this->set('error', false);
		$usrpgelimit = 5;
		
		$data = $this->User->find('all',array('conditions'=>array(),'order'=>array('User.id DESC'),'limit'=>10));
		$newdata = $this->User->find('list',array('fields'=>'User.dateCreated'));

		$this->redirect(array("controller" => "users", "action" => "index"));
		//pr($newdata); die();

		$this->set('newdata',$newdata);
		$this->set('data',$data);
		if($this->RequestHandler->isAjax()) {
		    $this->render('admin_home', 'ajax');
		}
	}
	
	
	public function home() {
		$this->redirect(array('controller' => 'pages', 'action' => 'admin_home', 'admin' => true));
	}
}

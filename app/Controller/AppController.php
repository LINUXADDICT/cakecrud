<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
- * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    var $components = array('RequestHandler', 'Session');
    var $helpers = array('Html');
    var $uses = array('User','Setting','Slang');
    var $app_page_limit;
    var $app_default_email;
    var $count = 1;
    
    function url(){
      $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
      return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }
    
    //Checks login session
    function admin_checkSession() // check session for admin panel
    {
	   $userid = $this->Session->read('SS_ADMINID');
	
        if (!isset($userid) &&  $userid == "0" ||  $userid == "" )
        {            
              $this->redirect('/admin/users/login');
        }
    	elseif(!isset($userid)  || $userid == "0"   || $userid == "" )
    	{
    	      $this->redirect('/admin/users/lock');
    	}
    	else {
    	    return true;                 
    	}
    }
    
    
    //Gets user profile
    function getuserprofile($id)
    {
	   $user = $this->User->find('first',array('conditions'=>array("User.id"=>$id)));
	   return $user;
    }

    
    function beforeFilter()
    {
    	$this->disableCache();
    }
    
    public function checkUser($username = null,$email = null)
    {
	   $data = $this->User->find('first',array('conditions'=>array('OR'=>array('User.username'=>$username,'User.email_id'=>$email))));
        if ($data == null) $data = array();
        
	return $data;
    }
    
    //Switches page limit
    function changeNoOfRecord($no = null)
    {
    	$userid = $this->Session->read('SS_ADMINID');
    	$this->Session->write('SS_PAGE_LIMIT',$no);
    	$data = array('id' => $userid, 'page_limit' => $no);
    	$this->User->save($data);
    }

    function pageLimitArray()
    {
	   $arr = array(1=>"1",5=>"5",10=>"10",20=>"20",30=>"30",50=>"50",100=>"100");
	   return $arr;
    }
}

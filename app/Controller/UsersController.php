<?php
class UsersController extends AppController {

    public $helpers = array('Html', 'Form','Session','Ajax','Js');
    public $components = array('Session','RequestHandler','Filter','Photo','Random','Cookie');
    public $uses = array('User','Admins','Position');
    
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        
    }
    /* Set pagination default order*/
    public $paginate = array(
            'order' => array(
			 'User.id' => 'desc'
		 )
	 );	
   
   /* List all users added by admin*/
    public function admin_index()
    {
		$this->admin_checkSession();
        $this->layout = 'admin_default';
        $this->set('title_for_layout', 'Users Listing');
       	
       	$position_list = $this->Position->find('list',array('fields'=>'Position.id,Position.name'));

        $filter = $this->Filter->process($this);
        $this->set('url', $this->Filter->url);
		$userid = $this->Session->read('SS_ADMINID');
		$usrpgelimit = $this->Session->read('SS_PAGE_LIMIT');
		if($usrpgelimit == 0 || $usrpgelimit == null)
		{
		    $usrpgelimit = 10;
		}
        $this->paginate['limit'] = $usrpgelimit;
		$this->set('usrpgelimit',$usrpgelimit);
        $users = $this->paginate('User',$filter);
	
		$this->set('position_list',$position_list);
	
		$this->set(compact('users',$users));
        if($this->RequestHandler->isAjax()) {
            $this->render('admin_index', 'ajax');
        }  
    }
    
    // Change page record count
    public function admin_page($no)	
    {
		$this->changeNoOfRecord($no);
		$this->redirect(array('controller'=>'users','action'=>'index'));
	}
    
    // Add new user & Edit existing records
    public function admin_add()		
    {
		$this->admin_checkSession();
		$this->layout = 'admin_add';
		$this->set('title_for_layout', 'Add User');
        if ($this->request->is('post'))
        {
        	$msg = '<div class="alert alert-success"> The User has been saved</div>';
			if($_POST['editid']!=0)				// if editid is set then edit the record
        	{
        		$this->request->data['User']['id'] = $_POST['editid'];
        		$msg = '<div class="alert alert-success"> The User has been updated</div>';
        	}
        	if($this->request->data['User']['date'])
        	$this->request->data['User']['StartDate'] = date('Y-m-d',strtotime($this->request->data['User']['date']));
	        
		    if ($this->User->save($this->request->data))
		    {
					$this->Session->setFlash(__($msg, true), 'default', array("class" => "notibar msgsuccess"));
					$this->redirect(array('action' => 'index'));
		    }
		    else
		    {
		       $msg = '<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Unable to save user</div>';
				$this->Session->setFlash(__($msg, true), 'default', array("class" => "notibar msgsuccess"));
		    }
        }
    }
    /* Delete record */
    public function admin_delete($id,$pageno)
    {
		$this->admin_checkSession();
        if (!isset($id))
        {
            $this->redirect(array('action' => 'index'));
        }
		else
		{
			$this->User->delete($id);
	    
	    
			$msg = '<div class="alert alert-success"> The User has been deleted</div>';
			$this->Session->setFlash(__($msg, true), 'default', array("class" => "notibar msgsuccess"));
			$this->redirect(array('action'=>'index', 'page' => $pageno));
	    }
    }
    /* Login for admin page */
    public function admin_login()
    {
        $this->layout = 'admin_login';
        $userid = $this->Session->read('SS_ADMINID');
        
        if (isset($userid) && $userid != 0)
        {
            $this->redirect(array("controller" => "users", "action" => "index"));
        }
        $this->set('title_for_layout', 'Login');
        if ($this->request->is('post'))
        {
	    	$user = $this->Admins->find('first',array('conditions'=>array('Admins.email' => $this->request->data['User']['email'], 'Admins.password' => md5($this->request->data['User']['password']))));
	    	if($user != null)
            {
            	/* if rememberme is set then cookie set for 30 days*/
            	if(isset($this->request->data['User']['rememberme']) && $this->request->data['User']['rememberme']){
	            	$this->Cookie->write('email', $this->request->data['User']['email'], false, 3600*24*30);
	            	$this->Cookie->write('pass', $this->request->data['User']['password'], false, 3600*24*30);
	            	$this->Cookie->write('rememberme', $this->request->data['User']['rememberme'], false, 3600*24*30);
	            }
	            else{

	            	$this->Cookie->delete('email');
	            	$this->Cookie->delete('pass');
	            	$this->Cookie->delete('rememberme');	
	            }
                $this->Session->write('SS_ADMINID',$user['Admins']['id']);
                $this->Session->write('SS_ADMINEMAIL',$user['Admins']['email']);
                $this->Session->write('SS_PAGE_LIMIT',10);
                $this->redirect(array("controller" => "users", "action" => "index"));

            }
            else{
                 $this->Session->setFlash('<div class="alert alert-danger">Invalid Username or Password.</div>');
		         $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }
        $this->request->data['User']['email'] = $this->Cookie->read('email');
        $this->request->data['User']['password'] = $this->Cookie->read('pass');
        $this->request->data['User']['rememberme'] = $this->Cookie->read('rememberme');

    }
    /* Logout*/
    public function admin_logout()
    {
        $this->Session->delete('SS_ADMINID');
        $this->Session->delete('SS_ADMINEMAIL');
        $this->Session->delete('SS_PAGE_LIMIT');
		$this->Session->destroy();
		$this->Session->setFlash('<div class="alert alert-success">You’ve been successfully logged out</div>');
		$this->redirect(array('controller'=>'users','action'=>'login'));	
    }
}

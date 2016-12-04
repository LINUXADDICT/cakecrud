<!-- BEGIN SIDEBAR -->

<?php
                $users = $contents = $contentsarrow = $statuses = $statusesarrow =  $products = $productsarrow = $feedbacks = $industries = $category = $pages= $profiles= $stores = $feedbacksarrow = $usersarrow = $storesarrow = $profilesarrow = $industriesarrow = $categoryarrow = $wordslist = $wordsadd = $words = $wordsarrow = ""  ; 
                if($this->params['controller'] == 'users'){ $users = "active"; $usersarrow = 'open'; }
                if($this->params['controller'] == 'users'){ $stores = "active"; $storesarrow = 'open';}
		if($this->params['controller'] == 'pages'){ $pages = "active"; $pagesarrow = 'open';}
		
		$userlist = $contentlist = $contentadd = $statuseslist = $statusesadd = $feedbacklist = $productlist = $productadd = $feedbackadd = $categorylist  = $categoryadd = $useradd = $storelist = $profilelist = $storeadd = $industrieslist= $industriesadd="";
		
		if($this->params['controller'] == 'users' && $this->params['action'] == 'admin_index') $userlist = "active";
		if($this->params['controller'] == 'users' && $this->params['action'] == 'admin_add') $useradd = "active";
		if($this->params['controller'] == 'users' && $this->params['action'] == 'admin_index') $storelist = "active";
		if($this->params['controller'] == 'users' && $this->params['action'] == 'admin_add') $storeadd = "active";
		
		?>

		<div id="left">
	        <ul id="menu" class="bg-blue dker">
	          <li class="<?php echo $users;?>">
	          	<?php echo $this->html->link('<i class="icon-group "></i> <span class="link-title">Users</span>',array('controller'=>'users','action'=>'index'),array('escape'=>false)); ?>
	          </li>
	          <li class="<?php echo $users;?>">
	          	<?php echo $this->html->link('<i class="icon-arrow-left "></i> <span class="link-title">Logout</span>',array('controller'=>'users','action'=>'logout'),array('escape'=>false)); ?>
	          </li>
	          </ul><!-- /#menu -->
      </div><!-- /#left -->



		
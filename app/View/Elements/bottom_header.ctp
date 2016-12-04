<div class="header">
       <ul class="headermenu">
              <li><a href="<?php echo $this->request->base.'/admin/pages/home'; ?>"title="Dashboard"><span class="icon icon-flatscreen"></span>Dashboard</a></li>
              
              
        
       </ul>
       
       <div class="headerwidget">
               <div class="earnings">
                     <div class="one_half">
                           <h4>Active Users</h4>
                           <h2>
                           <?php
                                  echo $cnt = $this->requestAction('users/usercount');
                           ?>
                           </h2>
                     </div><!--one_half-->
                     <!--<div class="one_half last alignright">
                           <h4>New results</h4>
                           <h2>-->
                           <?php
                             //echo "coming soon.."
                                  //echo $cntnew = $this->requestAction('slangs/newslangcount');
                           ?>
                     <!--      </h2>
                     </div>--><!--one_half last-->
           </div>
       </div>
</div>
               
               <!--earnings-->
       </div><!--headerwidget-->
</div><!--header-->
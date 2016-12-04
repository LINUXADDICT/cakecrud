<div class="tab-content">
        <div id="login" class="tab-pane active">
            <?php echo $this->Form->create('User',array('id'=>'frmadminlogin', 'name'=>'frmadminlogin')); ?>
            	<?php echo  $this->Session->flash(); ?>
            	<div class="alert alert-error hide">
					<button class="close" data-dismiss="alert"></button>
					<span>Enter correct username or password.</span>                   
				</div>
                <p class="text-muted text-center">
                    Enter your email and password
                </p>
                <?php echo $this->Form->input('User.email',array('type'=>'text','label'=>false,'id'=>'username','class'=>'form-control top','placeholder'=>'Email','div'=>false/*,'name'=>'username'*/)); ?>
                <?php echo $this->Form->input('User.password',array('label'=>false,'id'=>'password','placeholder'=>'Password','class'=>'form-control bottom','div'=>false));  ?>

                <!--<input type="text" placeholder="Username" class="form-control top">
                <input type="password" placeholder="Password" class="form-control bottom">-->
                <div class="checkbox">
                	<label>
				  
                	 <?php echo $this->Form->input('User.rememberme',array('type'=>'checkbox','label'=>false,'value'=>1));  ?>
				     Remember Me
				  </label>
				</div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <?php echo $this->Form->end();?>
        </div>
    </div>
    <hr>
    
		<!-- END LOGIN FORM -->
                
 <script type="text/javascript">
        //alert($("#username").val());
        $('#frmadminlogin').validate({
	            //errorElement: 'label', //default input error message container
	            //errorClass: 'help-inline', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                "data[User][email]": {
	                    required: true,
	                    email:true
	                },
	                "data[User][password]": {
	                    required: true
	                },
	            },

	            messages: {
	                 "data[User][email]": {
	                    required: "Email is required."
	                },
	                "data[User][password]": {
	                    required: "Password is required."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   
	                $('.alert-error', $('.login-form')).show();
	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.control-group').addClass('error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.control-group').removeClass('error');
	                label.remove();
	            },

	           /* errorPlacement: function (error, element) {
	                error.addClass('help-small no-left-padding').insertAfter(element.closest('.input-icon'));
	            },*/


	        });
        
   
 </script>               
                
<script>
    $('#flashMessage').animate({opacity: 1.0}, 3000).fadeOut();
</script>
                
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<?php echo $this->Html->css('theme/lib/bootstrap/css/bootstrap.css'); ?>
	<!-- Font Awesome -->
	<?php echo $this->Html->css('theme/lib/font-awesome/css/font-awesome.css'); ?>
	<!-- Metis core stylesheet -->
    <?php echo $this->Html->css('theme/css/main.css'); ?>
    <?php echo $this->Html->css('toaster.css'); ?>
	<!-- metisMenu stylesheet -->
    <?php echo $this->Html->css('theme/lib/metismenu/metisMenu.css'); ?>
	<!-- animate.css stylesheet -->
    <?php echo $this->Html->css('theme/lib/animate.css/animate.css'); ?>
	
	<link rel="shortcut icon" href="favicon.ico" />
	
	
		<!-- BEGIN CORE PLUGINS -->

	<?php echo $this->Html->script('theme/lib/jquery/jquery.js');?>
	<?php echo $this->Html->script('toaster.js');?>
	
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	
	<?php echo $this->Html->script('validation/jquery.validate.min.js');?>
	<!-- END PAGE LEVEL PLUGINS -->
	
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	
	<!-- END PAGE LEVEL SCRIPTS --> 
	<style>
		#flashMessage,.error{color: #C70039;}
	</style>
	
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	 <div class="form-signin">
    <div class="text-center">
        <!-- <img src="assets/img/logo.png" alt="Metis Logo"> -->
        ACME App
    </div>
    <hr>
   
    <script type="text/javascript">
       var message ='<?php echo $this->Session->flash();?>';
       // console.log(message);
       if(message){
       	     $.toast({
                        heading: "Success",
                        showHideTransition: 'slide',
                        text: message,
                        icon: 'success'
                    });
         }
        </script>
    <!-- END LOGO -->
	<!-- BEGIN LOGIN -->
		<?php echo $this->fetch('content'); ?>      
	<!-- END LOGIN -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->


	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

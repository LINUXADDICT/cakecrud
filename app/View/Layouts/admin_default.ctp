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
	<?php echo $this->Html->css('theme/lib/font-awesome.min.css'); ?>
	
	<!-- Metis core stylesheet -->
    <?php echo $this->Html->css('theme/css/main.css'); ?>
	<!-- metisMenu stylesheet -->
    <?php echo $this->Html->css('theme/lib/metismenu/metisMenu.css'); ?>
	<!-- animate.css stylesheet -->
    <?php echo $this->Html->css('theme/lib/animate.css/animate.css'); ?>
    <?php echo $this->Html->css('toaster.css'); ?>
	
     <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
     <style>
		#flashMessage,.error{color: #C70039 !important;}
	</style>
    <link rel="stylesheet/less" type="text/css" href="<?php echo $this->webroot; ?>css/theme/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
	<?php echo $this->Html->css('theme/css/style-switcher.css'); ?>
	<?php //echo $this->Html->css('theme/less/theme.less'); ?>
	 <?php echo $this->Html->script('theme/lib/jquery/jquery.js');?>
	 <?php echo $this->Html->script('toaster.js');?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
	 <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <?php echo $this->Html->script('theme/lib/bootstrap/js/bootstrap.js');?>
	<?php echo $this->Html->script('theme/lib/metismenu/metisMenu.js');?>
	<?php echo $this->Html->script('theme/lib/screenfull/screenfull.js');?>
	<?php echo $this->Html->script('theme/js/core.js');?>
	<?php echo $this->Html->script('theme/js/app.js');?>
	
	<?php echo $this->Html->script('jquery.formatCurrency-1.4.0.js');?>
	<?php echo $this->Html->script('validation/jquery.validate.min.js');?>	

	<!-- END CORE PLUGINS -->
		
	
	<!-- END PAGE LEVEL PLUGINS -->
	            <script>
                    $(function() {
                      // Metis.dashboard();
                    });
                </script>
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

            

	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
 <body class="  " style='background-image: url("<?php echo $this->webroot; ?>/img/pattern/arches.png"); background-repeat: repeat; padding-top: 0px;'>

	<div class="bg-dark dk" id="wrap">
      <div id="top">
		<!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button>
              <a href="#" class="navbar-brand">
              </a> 
            </header>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <!-- .nav -->
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="<?php echo $this->base.'/admin/users';?>">ACME App</a> 
                </li>
             </ul><!-- /.nav -->
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
        
      </div><!-- /#top -->

      <?php echo $this->element('left_col'); ?>
	   	<div class="content" id="cnt" >
	   						<?php echo $this->fetch('content'); ?>
		</div>
					
		
	</div>
	<!-- END CONTAINER -->
			<footer class="Footer bg-dark dker">
                <p>2016 © Company</p>
            </footer>
	
	<!-- END JAVASCRIPTS -->
	
	
</body>
<!-- END BODY -->


</html>

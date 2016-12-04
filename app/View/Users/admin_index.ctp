<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css"/>
<?php $this->Paginator->options(array('url' => $this->passedArgs));
$this->Paginator->options(array('update' => '#cnt','evalScripts' => true,
        'before' => $this->Js->get('#busy-indicator')->effect('fadeIn', array('buffer' => false)),
    'complete' => $this->Js->get('#busy-indicator')->effect('fadeOut', array('buffer' => false)),)); ?>

<div id="content" style="height: 700px;">
                    <div class="outer">
                        <div class="inner bg-light lter">
                
  			                
							<div class="row">
							  <div class="col-lg-12 ui-sortable">
							        <div class="box ui-sortable-handle">
							            <header>
							                <div class="icons"><i class="icon-group"></i></div>
							                <h5>Users List</h5>
							            </header>
							            <div id="collapse4" class="body">
					  						<?php echo $this->Session->flash(); ?>
							
									    	 <label>
												
												 <?php
												    $opt1 = $this->requestAction('app/pageLimitArray');     //pagination list array
												    echo $this->form->input("User.page_limit",array('class'=>'tbl_top_link','type'=>'select','options'=>$opt1,'onchange'=>'dopagination(this.value);','value'=>$usrpgelimit,'label'=>false,'class'=>'form-control m-wrap small','div'=>false));   
												    ?>
												 </label>
										     <a class=" btn btn-success pull-right  addnew" data-toggle="modal" href="#stack1" style="margin-bottom: 10px;">Add New <i class="icon-plus"></i></a> 
											<!--Begin tables-->
											<table class="table table-bordered table-condensed table-hover table-striped " id="">
												<thead>
													<tr>
														<th>
														    <?php echo $this->Paginator->sort('FirstName', 'FirstName'); ?>
														    <?php  
														    if($this->paginator->sortKey() == "FirstName" && $this->paginator->sortDir() == "desc")
														    { echo $this->html->image('sort_asc.png',array('class'=>'desc'));}
														    else if($this->paginator->sortKey() == "FirstName" && $this->paginator->sortDir() == "asc"){
														    echo $this->html->image('sort_desc.png',array('class'=>'desc'));}else{
															echo $this->html->image('sort_both.png',array('class'=>'desc'));
														    
															} ?>
					
														</th>
														<th class="hidden-480">
														<?php echo $this->Paginator->sort('LastName', 'LastName'); ?>
														    <?php  
														    if($this->paginator->sortKey() == "LastName" && $this->paginator->sortDir() == "desc")
														    {echo $this->html->image('sort_asc.png',array('class'=>'desc'));}
														    else if($this->paginator->sortKey() == "LastName" && $this->paginator->sortDir() == "asc"){
														    echo $this->html->image('sort_desc.png',array('class'=>'desc'));}else{
															echo $this->html->image('sort_both.png',array('class'=>'desc'));
														    
															} ?>
														</th>
														<th class="hidden-480">Position</th>
														<th class="hidden-480" style="text-align: center">Date Started</th>
														<th style = "text-align:center" width='200' >Salary</th>
														<th style = "text-align:center" width='200' >Action</th>
													</tr>
												</thead>
												<tbody>
												    <?php
												    if(!empty($users))
												    {
													
													foreach($users as $post)
													{
													
												    ?>
													<tr class="odd gradeX">
													    <td class="fname"><?php echo $post['User']['FirstName']; ?></td>
														<td class="lname"><?php echo $post['User']['LastName']; ?></td>
														<td class="position" data-position="<?php echo $post['User']['position']; ?>"><?php echo (isset($position_list[$post['User']['position']])) ? $position_list[$post['User']['position']] : "Not Set"; ?></td>
														<td class="startdate" data-date="<?php echo date('m/d/Y',strtotime($post['User']['StartDate'])); ?>"><?php echo date('m/d/Y',strtotime($post['User']['StartDate'])); ?></td>
														<td class="salary" data-val="<?php echo $post['User']['salary']; ?>"><?php echo $post['User']['salary']; ?></td>
														<td style = "text-align:center">
														<?php
														//echo $this->html->link('View  '.' <i class="icon-share"></i> ',array('controller'=>'users','action'=>'view',$post['User']['id']),array("title" => "View User", "escape" => false,'class'=>'btn mini blue')).'&nbsp;&nbsp;';
														echo $this->html->link('Edit  '.' <i class="icon-edit"></i> ',"#stack1",array("title" => "Edit User", "escape" => false,'data-id'=>$post['User']['id'],'data-toggle'=>'modal','class'=>'btn btn-warning btn-xs purple editbutton')).'&nbsp;&nbsp;';
														echo $this->ajax->link('Delete  '.' <i class="icon-trash"></i> ',array('controller'=>'users','action'=>'delete',$post['User']['id'],$this->paginator->current(),$this->paginator->sortKey(),$this->paginator->sortDir())
																       ,array('update' => 'cnt','indicator'=>'loading1','confirm' => 'Are you sure want to delete #'.$post['User']['FirstName'].' ?', "escape" => false,'class'=>'btn btn-danger btn-xs red','title'=>'Delete User')); 
														?>
														</td>
													</tr>
												    <?php
													}
												    }else{
												
												    ?>
												    
												    <tr class="odd gradeX">
														<td colspan="6" style ="text-align:center">No Records found.</td>
												    </tr>
												    <?php
												    }
												    ?>
												    
												</tbody>
											</table>
									
									
											<!--end table-->
										    <div class="span6" style="float: right;">
												<?php echo $this->element('pagination'); ?>
										   	</div>
								    
								    	</div>
									</div>
								</div>
							</div>
						
					
				
				
			<input type="hidden" id="hdcurpage" name="hdcurpage" value="<?php echo $this->paginator->current();?>" />
			<input type="hidden" id="hdsortkey" name="hdsortkey" value="<?php echo $this->paginator->sortKey();?>" />
		       <input type="hidden" id="hdsortdir" name="hdsortdir" value="<?php echo $this->paginator->sortDir();?>" />
		       
<script language="javascript" type="text/javascript">
    function dopagination(record)
    {
		if(record != '')
		{
		    location.href = '<?php echo Router::url("/", true);?>admin/users/page/'+record;
		}
    }
</script>
</div>
			</div>
		</div>
			 
<?php echo $this->Js->writeBuffer(); ?>
<script>
    $('.notibar').animate({opacity: 1.0}, 3000).fadeOut();
</script>

					<div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first">
			
								<div class="modal-dialog">
							        <div class="modal-content">
							          <div class="modal-header">
							            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							            <h4 class="modal-title">Add New User</h4>
							          </div>

							          <?php echo $this->Form->create('User',array('url'=>array('controller'=>'users','action'=>'add'),'class'=>"form-horizontal")); ?>
			
									  <input type="hidden" name="editid" value="0" id="editid">
							          <div class="modal-body">
																		  
									  <div class="form-group">
										<label class="control-label col-sm-4  search">FirstName</label>
											<div class="col-sm-8">
											<?php echo $this->Form->input('User.FirstName',array('label'=>false,'class'=>'form-control'));?>
											</div>
									  </div>
									
									  <div class="form-group">
										<label class="control-label col-sm-4  search">LastName</label>
											<div class="col-sm-8">
											<?php echo $this->Form->input('User.LastName',array('label'=>false,'type'=>'text','class'=>'form-control'));?>
											</div>
									  </div>

									<div class="form-group">
										<label class="control-label col-sm-4  search">Position</label>
											<div class="col-sm-8">
											<?php echo $this->Form->input('User.position',array('options'=>$position_list,'label'=>false,'type'=>'select','empty'=>'-Select-','class'=>'form-control'));?>
											</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-4  search">Date Started</label>
											<div class="col-sm-8">
											<?php echo $this->Form->input('User.date',array('label'=>false,'type'=>'text','class'=>'form-control'));?>
											</div>
									  </div>

									<div class="form-group">
										<label class="control-label col-sm-4  search">Salary</label>
											<div class="col-sm-8">
											<?php echo $this->Form->input('User.salary',array('label'=>false,'type'=>'text','class'=>'form-control'));?>
											</div>
									  </div>

	

									</div>
									<div class="modal-footer">
									    <button type="submit"  class="btn btn-primary green">Submit</button>
										<button type="button" data-dismiss="modal" class="btn btn-danger red">Close</button>
										<!--<button type="button" class="btn red">Ok</button>-->
									</div>
									<?php echo $this->Form->end();?>
								</div>
					</div>

						
<style>
.modal-title{ color:#000;}
.search{ color:#000;}
.error{color:#000;}
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
	$('#UserDate').datepicker({
	  format: 'mm/dd/yyyy',
        // startDate: '-3d'
	});
        //alert($("#username").val());
        $('#UserAdminIndexForm').validate({
	            //errorElement: 'label', //default input error message container
	            //errorClass: 'help-inline', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                "data[User][FirstName]": {
	                    required: true,
	                    minlength:2,
	                    maxlength:15
	                },
	                "data[User][LastName]": {
	                    required: true,
	                    minlength:2,
	                    maxlength:25
	                },
	                "data[User][date]": {
	                    required: true
	                },
	                "data[User][salary]": {
	                    required: true
	                },
	                "data[User][position]": {
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
   
  $('.editbutton').click(function(){
  	console.log($(this).attr('data-id'));
  	$('.modal-title').html('Edit User');
  	$('#editid').val($(this).attr('data-id'));
  	$('#UserFirstName').val($(this).closest('tr').find('.fname').html());
  	$('#UserLastName').val($(this).closest('tr').find('.lname').html());
  	$('#UserDate').val($(this).closest('tr').find('.startdate').attr('data-date'));
  	$("#UserDate").datepicker("update", $(this).closest('tr').find('.startdate').attr('data-date'));
  	$('#UserPosition').val($(this).closest('tr').find('.position').attr('data-position'));
  	$('#UserSalary').val($(this).closest('tr').find('.salary').html());
	$(".error").html("");
  });  
   $('.addnew').click(function(){
  	$('.modal-title').html('Add New User');
  	$('#editid').val(0);
  	$('#UserFirstName').val("");
  	$('#UserLastName').val("");
  	$('#UserDate').val("");
  	$('#UserPosition').val("");
  	$('#UserSalary').val("");
	$(".error").html("");
	$('#UserDate').datepicker({
	  format: 'mm/dd/yyyy',
        // startDate: '-3d'
	});
  });
   
   
   //$('#UserSalary').blur(function() {
//				$('#formatWhileTypingAndWarnOnDecimalsEnteredNotification2').html(null);
//				$(this).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
//			})
//			.keyup(function(e) {
//				var e = window.event || e;
//				var keyUnicode = e.charCode || e.keyCode;
//				if (e !== undefined) {
//					switch (keyUnicode) {
//						case 16: break; // Shift
//						case 17: break; // Ctrl
//						case 18: break; // Alt
//						case 27: this.value = ''; break; // Esc: clear entry
//						case 35: break; // End
//						case 36: break; // Home
//						case 37: break; // cursor left
//						case 38: break; // cursor up
//						case 39: break; // cursor right
//						case 40: break; // cursor down
//						case 78: break; // N (Opera 9.63+ maps the "." from the number key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")
//						case 110: break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)
//						case 190: break; // .
//						default: $(this).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: -1, eventOnDecimalsEntered: true });
//					}
//				}
//			})
//			.bind('decimalsEntered', function(e, cents) {
//				if (String(cents).length > 2) {
//					var errorMsg = 'Please do not enter any cents (0.' + cents + ')';
//					$('#formatWhileTypingAndWarnOnDecimalsEnteredNotification2').html(errorMsg);
//					log('Event on decimals entered: ' + errorMsg);
//				}
//			});
 </script> 
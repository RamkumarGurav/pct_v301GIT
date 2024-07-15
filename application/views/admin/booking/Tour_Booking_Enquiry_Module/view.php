<?php 

$page_module_name = "Tour Booking Enquiry";

?>
<?php 
$name="";
$tour_booking_enquiry_id=0;
$status=1;
$record_action = "Add New Record";
if(!empty($tour_booking_enquiry_data))
{
	// $record_action = "Update";
	// $tour_booking_enquiry_id = $tour_booking_enquiry_data->tour_booking_enquiry_id;
	// $name = $tour_booking_enquiry_data->name;
	// $status = $tour_booking_enquiry_data->status;
	
}
?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php  echo $page_module_name?> <small>Details</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php  echo MAINSITE_Admin."wam"?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php  echo MAINSITE_Admin.$user_access->class_name."/".$user_access->function_name?>"><?php  echo $user_access->module_name?> List</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php   ?>
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card ">

                    <div class="card-header">
                        <h3 class="card-title"><?php  echo $tour_booking_enquiry_data->name?></h3>
                        <div class="float-right">
                            <?php  
								if($user_access->add_module==1 && false)	{
								?>
								<a href="<?php  echo MAINSITE_Admin.$user_access->class_name?>/edit"> 
                            <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add
                                New</button></a>
                            <?php  } ?>
                            <?php  
							if($user_access->update_module==1)	{
							?>
							<a href="<?php  echo MAINSITE_Admin.$user_access->class_name?>/edit/<?php  echo $tour_booking_enquiry_data->tour_booking_enquiry_id?>"> 
                            <button type="button" class="btn btn-success btn-sm" ><i
                                    class="fas fa-edit"></i> Update</button>
                            </a>
                            <?php  } ?>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <?php  
						if($user_access->view_module==1)	{
					?>
                    <div class="card-body card-primary card-outline">
                        
                            <?php  echo form_open(MAINSITE_Admin."$user_access->class_name/doUpdateStatus", array('method' => 'post', 'id' => 'ptype_list_form' , "name"=>"ptype_list_form", 'style' => '', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                            <input type="hidden" name="task" id="task" value="" />
                            <?php  echo $this->session->flashdata('alert_message'); ?>
                            <div class="divTable" style="display:none;">
                            	<div class="TableRow">
                                	<div class="table_col">
                                        <label class="label_content_br">Data Base Id <span class="colen">:</span></label>
                                        <?php  echo $tour_booking_enquiry_data->tour_booking_enquiry_id?>
                                    </div>
                                    <div class="table_col table_wrap">
                                        <label class="label_content_br">Enquiry Date  <span class="colen">:</span></label>
                                       <?php  echo date("d-m-Y h:i:s A" , strtotime($tour_booking_enquiry_data->added_on))?>
                                    </div>
                                    <div class="table_col" >
                                        <label class="label_content_br">Name <span class="colen">:</span></label>
                                        <?php  echo $tour_booking_enquiry_data->name?>
                                    </div>                                	
                                   
                                </div>                                 
                            	<div class="TableRow">
                                	<div class="table_col">
                                        <label class="label_content_br">Email<span class="colen">:</span></label>
                                        <?php  echo $tour_booking_enquiry_data->email;?>
                                    </div>
                                    
                                    <div class="table_col">
                                        <label class="label_content_br">Contact No.<span class="colen">:</span></label>
                                        <?php  echo $tour_booking_enquiry_data->contactno?>
                                    </div>
                                    
                                     <div class="table_col">
                                        <label class="label_content_br">Subject<span class="colen">:</span></label>
                                        <?php  echo $tour_booking_enquiry_data->subject?>
                                    </div>
                                    
                                    <div class="table_col">
                                        <label class="label_content_br">Description<span class="colen">:</span></label>
                                        <?php  echo $tour_booking_enquiry_data->description?>
                                    </div>
                                    
                                    
                                     
                                </div>                                  
                            	<div class="TableRow">
                                	
                                    <div class="table_col">
                                        <label class="label_content_br">Added On<span class="colen">:</span></label>
                                        <?php  echo date("d-m-Y h:i:s A" , strtotime($tour_booking_enquiry_data->added_on))?>
                                    </div>
                                    
                                    <div class="table_col">
                                        <label class="label_content_br">Updated On<span class="colen">:</span></label>
                                        <?php  if(!empty($tour_booking_enquiry_data->updated_on)){echo date("d-m-Y h:i:s A" , strtotime($tour_booking_enquiry_data->updated_on));}else{echo "-";}?>
                                    </div>
                                </div>                           
                            	<div class="TableRow">
                                	<div class="table_col">
                                        <label class="label_content_br">Updated By<span class="colen">:</span></label>
                                        <?php  if(!empty($tour_booking_enquiry_data->updated_by_name)){echo $tour_booking_enquiry_data->updated_by_name;}else{echo "-";}?>
                                    </div>
                                	<div class="table_col">
                                        <label class="label_content_br">Status<span class="colen">:</span></label>
                                        <?php  if($tour_booking_enquiry_data->status==1){ ?> Active <i class="fas fa-check btn-success btn-sm "></i>
                                                <?php }else{ ?> Block <i class="fas fa-ban btn-danger btn-sm "></i>
                                                <?php  }?>
                                    </div>
                               </div>                            
                            </div>
                            
                            <table id="" class="table table-bordered table-hover myviewtable responsiveTableNewDesign"  >
                                <tbody>
								<tr>
										<td >
										<strong class="full">Data Base Id</strong>
										<?php  echo $tour_booking_enquiry_data->tour_booking_enquiry_id?></td>
										<td >
                                        	<strong class="full">Enquiry Date</strong>
                                            <?php  echo date("d-m-Y h:i:s A" , strtotime($tour_booking_enquiry_data->added_on))?>
										</td>
										
<td >
<strong class="full">Name</strong>
<?php  echo $tour_booking_enquiry_data->name?></td>
<td >
                                        <strong  class="full">Email</strong>
                                        <?php  echo $tour_booking_enquiry_data->email?></td>
										
									</tr>

									<tr>
                                      
                                        
                                        
                                        <td><strong class="full">Contact No</strong><?php  echo $tour_booking_enquiry_data->contactno?></td>
                                        <td colspan="1"><strong class="full">Subject</strong><?php  echo $tour_booking_enquiry_data->subject?></td>
                                        <td colspan="2">
                                        <strong class="full">Enquiry Descriptrion</strong>
                                         <?php  echo $tour_booking_enquiry_data->description?></td>
                                        
                                       
									</tr>
                                   
                           
                                    <tr>
                                    <td >
                                        <strong class="full">Tour Variant</strong>
                                        <?php  if ($tour_booking_enquiry_data->tour[0]->tour_variant == 1): ?>
														Upcoming Adventures
													<?php  elseif ($tour_booking_enquiry_data->tour[0]->tour_variant == 2): ?>
														Upcoming Tours
													<?php  elseif ($tour_booking_enquiry_data->tour[0]->tour_variant == 3): ?>
														Activities
													<?php  else: ?>
														-
													<?php  endif; ?>
                                        <td>
                                        <strong class="full">Tour Name</strong>
                                         <?php  echo $tour_booking_enquiry_data->tour[0]->name?></td>
                                         <td colspan="1">
                                        <strong class="full">Tour Date</strong>
                                        <?php  if (!empty($tour_booking_enquiry_data->tour_date)): ?>
                                            <?php  echo  $tour_booking_enquiry_data->tour_date[0]->start_date_time ?> TO <?php  echo  $tour_booking_enquiry_data->tour_date[0]->end_date ?></td>
                                            <?php  else: ?>
                                                -
                                            <?php  endif; ?>
                                      
                                        <td colspan="1">
                                        <strong class="full">Tour Price</strong>
                                        <?php  if (!empty($tour_booking_enquiry_data->tour_date)): ?>
                                                        <?php  if (empty($tour_booking_enquiry_data->tour_date[0]->is_discount)): ?>
                                                            ₹<?php  echo  $tour_booking_enquiry_data->tour_date[0]->actual_price ?>
                                                        <?php  else: ?>

                                                            ₹<?php  echo  $tour_booking_enquiry_data->tour_date[0]->discounted_price ?>

                                                        <?php  endif; ?>

                                                        <?php  else: ?>
                                                            -
                                                    <?php  endif; ?>
                                       
                                    </tr>
								
									
                                    
                                    <tr>
                                    <td >
										<strong class="full">Added by</strong>
                                        <?php  if(!empty($tour_booking_enquiry_data->updated_by_name)){echo $tour_booking_enquiry_data->updated_by_name;}else{echo "-";}?></td>
                                    <td >
										<strong class="full">Updated On</strong>
										<?php  if(!empty($tour_booking_enquiry_data->updated_on)){echo date("d-m-Y h:i:s A" , strtotime($tour_booking_enquiry_data->updated_on));}else{echo "-";}?></td>
									<td >
										<strong  class="full">Updated By</strong>
										<?php  if(!empty($tour_booking_enquiry_data->updated_by_name)){echo $tour_booking_enquiry_data->updated_by_name;}else{echo "-";}?></td>
									<td colspan="3">
										<strong class="full">Status</strong>
										<?php  if($tour_booking_enquiry_data->status==1){ ?> Active <i class="fas fa-check btn-success btn-sm "></i>
                                                <?php }else{ ?> Block <i class="fas fa-ban btn-danger btn-sm "></i>
                                                <?php  }?></td>
									</tr>
                                    
                                </tbody>
                                
						</table>
						<?php  echo form_close() ?>
                    </div>
                    <?php  }else{ 
						$this->data['no_access_flash_message']="You Dont Have Access To View ".$page_module_name;
						$this->load->view('admin/template/access_denied' , $this->data); 
					} ?>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>


    </section>
    <?php   ?>
</div>

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>

<script type="application/javascript">
function check_uncheck_All_records() // done
{
    var mainCheckBoxObj = document.getElementById("main_check");
    var checkBoxObj = document.getElementsByName("sel_recds[]");

    for (var i = 0; i < checkBoxObj.length; i++) {
        if (mainCheckBoxObj.checked)
            checkBoxObj[i].checked = true;
        else
            checkBoxObj[i].checked = false;
    }
}

function validateCheckedRecordsArray() // done
{
    var checkBoxObj = document.getElementsByName("sel_recds[]");
    var count = true;

    for (var i = 0; i < checkBoxObj.length; i++) {
        if (checkBoxObj[i].checked) {
            count = false;
            break;
        }
    }

    return count;
}

function validateRecordsActivate() // done
{
    if (validateCheckedRecordsArray()) {
        //alert("Please select any record to activate.");
        toastrDefaultErrorFunc("Please select any record to activate.");
        document.getElementById("sel_recds1").focus();
        return false;
    } else {
        document.ptype_list_form.task.value = 'active';
        document.ptype_list_form.submit();
    }
}

function validateRecordsBlock() // done
{
    if (validateCheckedRecordsArray()) {
        //alert("Please select any record to block.");
        toastrDefaultErrorFunc("Please select any record to block.");
        document.getElementById("sel_recds1").focus();
        return false;
    } else {
        document.ptype_list_form.task.value = 'block';
        document.ptype_list_form.submit();
    }
}
</script>

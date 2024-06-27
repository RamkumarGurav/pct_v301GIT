<?php
$page_module_name = "Tour Booking Enquiry";
?>
<?
$tour_booking_enquiry_date_input = date('d-m-Y');
$tour_booking_enquiry_id = 0;
// $tour_id = 0;
// $tour_date_id = 0;
$description = $name = $email = $contactno = $subject = "";
$tour_id = 0;
$tour_date_id = 0;
$data_view = $approval_access = 0;
$status = 1;
$record_action = "Add New Record";

if (!empty($tour_booking_enquiry_data)) {
	$record_action = "Update";
	$tour_booking_enquiry_id = $tour_booking_enquiry_data->tour_booking_enquiry_id;
	// $tour_id = $tour_booking_enquiry_data->tour[0]->tour_id;
	// $tour_date_id = $tour_booking_enquiry_data->tour_date[0]->tour_date_id;
	$tour_booking_enquiry_date_input = date('d-m-Y', strtotime($tour_booking_enquiry_data->added_on));
	$name = $tour_booking_enquiry_data->name;
	$email = $tour_booking_enquiry_data->email;
	$contactno = $tour_booking_enquiry_data->contactno;
	$subject = $tour_booking_enquiry_data->subject;
	$description = $tour_booking_enquiry_data->description;
	$tour_id = $tour_booking_enquiry_data->tour_id;
	$tour_date_id = $tour_booking_enquiry_data->tour_date_id;
	$status = $tour_booking_enquiry_data->status;
	$admin_user_id = $tour_booking_enquiry_data->updated_by;


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
					<h1 class="m-0 text-dark"><?= $page_module_name ?> </small></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= MAINSITE_Admin . "wam" ?>">Home</a></li>
						<li class="breadcrumb-item"><a
								href="<?= MAINSITE_Admin . $user_access->class_name . "/" . $user_access->function_name ?>"><?= $user_access->module_name ?>
								List</a></li>
						<? if (!empty($tour_booking_enquiry_data)) { ?>
							<li class="breadcrumb-item"><a
									href="<?= MAINSITE_Admin . $user_access->class_name . "/view/" . $tour_booking_enquiry_id ?>">View</a>
							</li>
						<? } ?>
						<li class="breadcrumb-item"><?= $record_action ?></li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<? ?>
	<section class="content">
		<div class="row">
			<div class="col-12">

				<div class="card">

					<div class="card-header">
						<h3 class="card-title"> <small><?= $record_action ?></small></h3>
					</div>
					<!-- /.card-header -->
					<?php
					if ($user_access->view_module == 1 || true) {
						?>
						<? echo $this->session->flashdata('alert_message'); ?>
						<div class="card-body">
							<?php echo form_open(MAINSITE_Admin . "$user_access->class_name/doEdit", array('method' => 'post', 'id' => 'tour_booking_enquiry_form', "name" => "tour_booking_enquiry_form", 'style' => '', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return validateForm()')); ?>

							<input type="hidden" name="tour_booking_enquiry_id" id="tour_booking_enquiry_id"
								value="<?= $tour_booking_enquiry_id ?>" />
							<!-- <input type="hidden" name="tour_id" id="tour_id" value="<?= $tour_id ?>" /> -->
							<!-- <input type="hidden" name="tour_date_id" id="tour_date_id" value="<?= $tour_date_id ?>" /> -->
							<input type="hidden" name="redirect_type" id="redirect_type" value="" />
							<input type="hidden" name="approval_access" value="0">

							<div class="form-group row">

								<div class="col-lg-3 col-md-4 col-sm-6">
									<label for="inputEmail3"
										class="py-0 px-2 col-sm-12 col-form-label-lg label_content">Tour_booking_enquiry Date <span
											style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12">
										<div class="input-group date tour_booking_enquiry_date_input" id="tour_booking_enquiry_date_input"
											data-target-input="nearest">
											<input type="text" readonly="readonly" value="<?= $tour_booking_enquiry_date_input ?>"
												name="tour_booking_enquiry_date" id="tour_booking_enquiry_date" placeholder="Joining Date"
												style="width: 100%;" class="form-control datetimepicker-input width100 form-control-sm"
												data-target="#tour_booking_enquiry_date_input" />
											<div class="input-group-append" data-target="#tour_booking_enquiry_date_input"
												data-toggle="datetimepicker">
												<div class="input-group-text"><i class="fa fa-calendar"></i></div>
											</div>

										</div>

									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Name <span
											style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12">
										<input type="text" class="form-control form-control-sm" required id="name" name="name"
											value="<?= $name ?>" placeholder="Name">
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Email <span
											style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12">
										<input type="email" class="form-control form-control-sm" required id="email" name="email"
											value="<?= $email ?>" placeholder="Email">
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Contact No <span
											style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12">
										<input type="number" class="form-control form-control-sm" pattern="[0-9]{8,15}" required
											id="contactno" name="contactno" value="<?= $contactno ?>" placeholder="Mobile No.">
									</div>
								</div>

							</div>



							<div class="form-group row">

								<div class="col-lg-3 col-md-4 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Subject <span
											style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12">
										<input type="text" class="form-control form-control-sm" required id="subject" name="subject"
											value="<?= $subject ?>" placeholder="Subject">
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Description <span
											style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12">
										<textarea type="text" cols="5" rows="5" class="form-control form-control-sm" required id="description"
											name="description" value="<?= $description ?>"
											placeholder="Description"> <?= $description ?></textarea>
									</div>
								</div>

								<!-- <div class="col-lg-3 col-md-4 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Tour ID <span
											style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12">
										<input type="text" readonly class="form-control form-control-sm" required id="tour_id" name="tour_id"
											value="<?= $tour_id ?>" placeholder="Tour_id">
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Tour Date ID <span
											style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12">
										<input type="text" readonly class="form-control form-control-sm" required id="tour_date_id"
											name="tour_date_id" value="<?= $tour_date_id ?>" placeholder="Tour_date_id">
									</div>
								</div> -->




















							</div>

							<div class="form-group row">
								<div class="col-lg-3 col-md-4 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Tour ID <span
											style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12">
										<input readonly type="number" class="form-control form-control-sm" pattern="[0-9]{8,15}" required
											id="tour_id" name="tour_id" value="<?= $tour_id ?>" placeholder="Upcoming Adventure ID">
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-6">
									<label for="inputEmail3" class="col-sm-12 label_content px-2 py-0">Tour Date <span
											style="color:#f00;font-size: 22px;margin-top: 3px;">*</span></label>
									<div class="col-sm-12">
										<select type="text" class="form-control form-control-sm" required id="tour_date_id"
											name="tour_date_id">
											<option value="">Select Tour Date</option>
											<? foreach ($tour_date_data as $item) {
												$selected = "";
												if ($item->tour_date_id == $tour_date_id) {
													$selected = "selected";
												}
												?>
												<option value="<?= $item->tour_date_id ?>" <?= $selected ?>> <?= $item->start_date_time ?> TO
													<?= $item->end_date ?>

												</option>
											<? } ?>
										</select>

									</div>
								</div>

								<div class="col-md-4 col-sm-6">
									<label for="radioSuccess1" class="col-sm-12 label_content px-2 py-0">Status</label>
									<div class="col-sm-10">
										<div class="form-check" style="margin-top:12px">
											<div class="form-group clearfix">
												<div class="icheck-success d-inline">
													<input type="radio" name="status" <? if ($status == 1) {
														echo "checked";
													} ?> value="1"
														id="radioSuccess1">
													<label for="radioSuccess1"> Active
													</label>
												</div>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<div class="icheck-danger d-inline">
													<input type="radio" name="status" <? if ($status != 1) {
														echo "checked";
													} ?> value="0"
														id="radioSuccess2">
													<label for="radioSuccess2"> Block
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<center>
									<button type="submit" name="save" onclick=" redirect_type_func('');" value="1"
										class="btn btn-info">Save</button>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button type="submit" name="save-add-new" onclick=" redirect_type_func('save-add-new');" value="1"
										class="btn btn-default ">Save And Add New</button>
								</center>
							</div>
							<!-- /.card-footer -->

							<?php echo form_close() ?>
							</table>
						</div>
					<? } else {
						$this->data['no_access_flash_message'] = "You Dont Have Access To View " . $page_module_name;
						$this->load->view('admin/template/access_denied', $this->data);
					} ?>
					<!-- /.card-body -->
				</div>
			</div>
		</div>


	</section>
	<? ?>
</div>


<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>


<script>
	function validateForm() {
		/*event.preventDefault();
		//user_role user_role_id
		
		$(".error_span").html("");
		var user_role_id_arr = document.getElementsByName("user_role_id[]");
		var i=0;
		var user_role_check = true;
		for(i=0 ; i< user_role_id_arr.length ; i++)
		{
			if(user_role_id_arr[i].value !='')
			{
				user_role_check = false;
			}
		}
		if(user_role_check)
		{
			toastrDefaultErrorFunc("You Did Not Assign The Role To The User.");
			$("#user_role_error").html("You Did Not Assign The Role To The User.");
		}
		else{
			
		}*/
		$('#tour_booking_enquiry_form').attr('onsubmit', '');
		$("#tour_booking_enquiry_form").submit();
	}


	function redirect_type_func(data) {
		document.getElementById("redirect_type").value = data;
		return true;
	}


	window.addEventListener('load', function () {
		//setSearch();
		var dateFormat = "DD-MM-YYYY";
		var CurrDate = new Date();
		var MinDate = new Date();
		var MaxDate = new Date();

		dateCurr = moment(CurrDate, dateFormat);
		dateMin = moment(MinDate, dateFormat);
		dateMax = moment(MaxDate, dateFormat);
		$('#tour_booking_enquiry_date_input').datetimepicker({
			format: dateFormat,
			//maxDate: dateMax,
			ignoreReadonly: true
		});



	})



</script>
<?php

$page_module_name = "Tours";



?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->


<!--{{{{{{ Content Wrapper. Contains page content -->
<div class="content-wrapper">


	<!--{{{{{{ Page Module Header with breadcrumb -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">
						<?= $page_module_name ?> <small>List</small>
					</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= MAINSITE_Admin . "wam" ?>">Home</a></li>
						<li class="breadcrumb-item active">
							<?= $page_module_name ?>
						</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- }}}}}} Page Module Header with breadcrumb -->



	<!--{{{{{{ Main content -->
	<section class="content">

		<div class="row">
			<div class="col-12">

				<!--   {{{{{{ Search Accordian-->
				<div id="accordion">
					<!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
					<div class="card card-primary">
						<div class="card-header">
							<h4 class="card-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="" aria-expanded="false">
									Search Panel
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" style="">
							<div class="card-body">

								<?php echo form_open(MAINSITE_Admin . "$user_access->class_name/$user_access->function_name", array('method' => 'post', 'id' => 'search_report_form', "name" => "search_report_form", 'style' => '', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>

								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Field</label>
												<select name="field_name" id="field_name" class="form-control" style="width: 100%;">
													<!-- <option value=''>Select Field</option> -->
													<option value='ft.name' <? if ($field_name == 'ft.name') {
														echo 'selected';
													} ?>>Tour Name
													</option>
													<option value='ft.location' <? if ($field_name == 'ft.location') {
														echo 'selected';
													} ?>>
														Location</option>
												</select>

											</div>
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group">
												<label>Field Value</label>
												<input type="text" name="field_value" id="field_value" placeholder="Field Value"
													style="width: 100%;" class="form-control" value="<?= $field_value ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Start Date</label>
												<div class="input-group date reservationdate" id="reservationdate" data-target-input="nearest">
													<input type="text" value="<?= $start_date ?>" name="start_date" id="start_date"
														placeholder="Start Date" style="width: 100%;" class="form-control datetimepicker-input"
														data-target="#reservationdate" />
													<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
														<div class="input-group-text"><i class="fa fa-calendar"></i>
														</div>
													</div>
												</div>

											</div>
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group">
												<label>End Date</label>
												<div class="input-group date reservationdate1" id="reservationdate1"
													data-target-input="nearest">
													<input type="text" value="<?= $end_date ?>" name="end_date" id="end_date"
														placeholder="End Date" style="width: 100%;" class="form-control datetimepicker-input"
														data-target="#reservationdate1" />
													<div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
														<div class="input-group-text"><i class="fa fa-calendar"></i>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Status</label>
												<select name="record_status" id="record_status" class="form-control" style="width: 100%;">
													<option value=''>Active / Block</option>
													<option value='1' <? if ($record_status == 1) {
														echo 'selected';
													} ?>>
														Active</option>
													<option value='zero' <? if ($record_status == 'zero') {
														echo 'selected';
													} ?>>Block</option>
												</select>

											</div>
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<!-- <div class="form-group">
																<label>Field Value</label>
																<input type="text" name="field_value" id="field_value" placeholder="Field Value" style="width: 100%;" class="form-control" value="<?= $field_value ?>"  >
																</div> -->
										</div>
									</div>


								</div>
								<div class="panel-footer">
									<center>
										<button type="submit" class="btn btn-info" id="search_report_btn" name="search_report_btn"
											value="1">Search</button>
										&nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button>
									</center>
								</div>
								<?php echo form_close() ?>
							</div>
						</div>

					</div>
				</div>
				<!-- }}}}}} Search Accordian  -->



				<!--   {{{{{{ Main Card with actions and Table -->
				<div class="card">
					<!--   {{{{{{{{{{ Main Card Header -->

					<div class="card-header">
						<h3 class="card-title"><span style="color:#FF0000;">Total Records:
								<?php echo $row_count; ?>
							</span></h3>
						<div class="float-right">
							<?php
							if ($user_access->add_module == 1) {
								?>
								<a href="<?= MAINSITE_Admin . $user_access->class_name ?>/tour-edit">
									<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add
										New</button></a>
							<? } ?>
							<?php
							if ($user_access->update_module == 1) {
								?>
								<button type="button" class="btn btn-success btn-sm" onclick="validateRecordsActivate()"><i
										class="fas fa-check"></i> Active</button>
								<button type="button" class="btn btn-dark btn-sm" onclick="validateRecordsBlock()"><i
										class="fas fa-ban"></i> Block</button>
							<? } ?>
							<?php
							if ($user_access->export_data == 1 && false) {
								?>
								<button type="button" class="btn btn-success btn-sm export_excel"><i class="fas fa-file-excel"></i>
									Export</button>
							<? } ?>
						</div>
					</div>
					<!-- }}}}}}}}}}}} Main Card Header  -->


					<!--   {{{{{{{{{{ Main Table-->
					<?php
					if ($user_access->view_module == 1) {
						?>
						<div class="card-body">

							<?php echo form_open(
								MAINSITE_Admin . "$user_access->class_name/tour-doUpdateStatus",
								array(
									'method' => 'post',
									'id' => 'ptype_list_form',
									"name" => "ptype_list_form",
									'style' => '',
									'class' => 'form-horizontal',
									'role' => 'form',
									'enctype' => 'multipart/form-data'
								)
							); ?>

							<input type="hidden" name="task" id="task" value="" />
							<? echo $this->session->flashdata('alert_message'); ?>
							<table id="example1" class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>#</th>
										<?php if ($user_access->update_module == 1) { ?>
											<th width="4%"><input type="checkbox" name="main_check" id="main_check"
													onclick="check_uncheck_All_records()" value="" /></th>
										<? } ?>
										<th>Tour Variant</th>
										<th>Tour Name</th>
										<th>Location</th>
										<th>Available Slots</th>
										<th>Duration</th>
										<!-- <th>Min Age</th> -->
										<!-- <th>Tour Type</th> -->
										<!-- <th>Banner Image</th>
										<th>Cover Image</th> -->
										<th>Added On</th>
										<th>Added By</th>
										<th>Status</th>
									</tr>
								</thead>
								<? if (!empty($tour_data)) { ?>
									<tbody>
										<?
										$offset_val = (int) $this->uri->segment(5);

										$count = $offset_val;

										foreach ($tour_data as $item) {
											$count++;
											?>
											<tr>

												<td>
													<?= $count ?>.
												</td>

												<?php if ($user_access->update_module == 1) { ?>
													<td><input type="checkbox" name="sel_recds[]" id="sel_recds<?php echo $count; ?>"
															value="<?php echo $item->tour_id; ?>" /></td>
												<? } ?>
												<td>
													<?php if ($item->tour_variant == 1): ?>
														Upcoming Adventures
													<?php elseif ($item->tour_variant == 2): ?>
														Upcoming Tours
													<?php elseif ($item->tour_variant == 3): ?>
														Activities
													<?php else: ?>
														-
													<?php endif; ?>
												</td>
												<td><a href="<?= MAINSITE_Admin . $user_access->class_name . "/tour-view/" . $item->tour_id ?>">
														<?= $item->name ?>
													</a>
												</td>

												<!-- <td>
													-
												</td>
												<td>
													-
												</td> -->

												<td>
													<?= $item->location ?>
												</td>
												<td>
													<?= $item->available_slots ?>
												</td>
												<td>


													<?php if (!empty($item->duration_day)) {
														$dayLabel = ($item->duration_day == 1) ? 'Day' : 'Days';
														echo $item->duration_day . ' ' . $dayLabel . ' ';
													}
													?>
													<?php if (!empty($item->duration_night)) {
														$nightLabel = ($item->duration_night == 1) ? 'Night' : 'Nights';
														echo $item->duration_night . ' ' . $nightLabel;
													}
													?>

												</td>
												<!-- <td><?= $item->minimum_age ?></td> -->
												<td>
													<?= date("d-m-Y", strtotime($item->added_on)) ?>
												</td>

												<td>
													<?= $item->added_by_name ?>
												</td>

												<td>
													<? if ($item->status == 1) { ?>
														<i class="fas fa-check btn-success btn-sm "></i>
													<? } else { ?>
														<i class="fas fa-ban btn-danger btn-sm "></i>
													<? } ?>
												</td>

											</tr>
										<? } ?>
									</tbody>
								<? } ?>
							</table>
							</form>
							<center>
								<div class="pagination_custum">
									<? echo $this->pagination->create_links(); ?>
								</div>
							</center>
						</div>
					<? } else {
						$this->data['no_access_flash_message'] = "You Dont Have Access To View " . $page_module_name;
						$this->load->view('admin/template/access_denied', $this->data);
					} ?>
					<!--   }}}}}}}}}}}} Main Table-->
				</div>
				<!-- }}}}}} Main Card with actions and Table  -->

			</div>
		</div>

	</section>
	<!-- }}}}} Main content -->
</div>
<!--}}}}}} Content Wrapper. Contains page content -->

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

<script>

	function getState(country_id, state_id = 0) {
		$('#loader1').show();
		$("#state_id").html('');
		$("#city_id").html('');
		if (country_id > 0) {
			Pace.restart();
			$.ajax({
				url: "<?= MAINSITE_Admin . 'Ajax/getState' ?>",
				type: 'post',
				dataType: "json",
				data: { 'country_id': country_id, 'state_id': state_id, "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>" },
				success: function (response) {
					$("#state_id").html(response.state_html);
				},
				error: function (request, error) {
					toastrDefaultErrorFunc("Unknown Error. Please Try Again");
					$("#quick_view_model").html('Unknown Error. Please Try Again');
				}
			});
		}

	}

	function getCity(state_id, city_id = 0) {
		$("#city_id").html('');
		if (state_id > 0) {
			Pace.restart();
			$.ajax({
				url: "<?= MAINSITE_Admin . 'Ajax/getCity' ?>",
				type: 'post',
				dataType: "json",
				data: { 'city_id': city_id, 'state_id': state_id, "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>" },
				success: function (response) {
					$("#city_id").html(response.city_html);
				},
				error: function (request, error) {
					toastrDefaultErrorFunc("Unknown Error. Please Try Again");
				}
			});
		}
	}

	window.addEventListener('load', function () {

		$(".paginationClass").click(function () {
			// console.log($(this).data('ci-pagination-page'));
			// console.log($(this));
			// console.log($(this).attr('href'));//alert();
			//alert(this.data('ci-pagination-page'));
			$('#search_report_form').attr('action', $(this).attr('href'));
			$('#search_report_form').submit();
			return false;
		});
		$('#reservationdate').datetimepicker({
			format: 'DD-MM-YYYY'
		});
		$('#reservationdate1').datetimepicker({
			format: 'DD-MM-YYYY'
		});

		$(".export_excel").bind("click", function () {

			$('#search_report_form').attr('action', '<? echo MAINSITE_Admin . $user_access->class_name . "/" . $user_access->function_name . "-export"; ?>');
			$('#search_report_form').attr('target', '_blank');
			$('#search_report_btn').click();

			$('#search_report_form').attr('action', '<? echo MAINSITE_Admin . $user_access->class_name . "/" . $user_access->function_name; ?>');
			$('#search_report_form').attr('target', '');
		})

		<? if (!empty($country_id) && !empty($state_id)) { ?>
			getState(<?= $country_id ?>, <?= $state_id ?>)
		<? } ?>

		<? if (!empty($city_id) && !empty($state_id)) { ?>
			getCity(<?= $city_id ?>
				, <?= $state_id ?>)
		<? } ?>
	})

</script>
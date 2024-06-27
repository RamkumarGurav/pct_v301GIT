<?php

$page_module_name = "Gallery";



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

		<div class="container-fluid">


			<div class="row">


				<div class="col-sm-12" id="show_Items">
					<!-- general form elements disabled -->
					<div class="card card-warning">
						<!--   {{{{{{{{{{ Main Card Header -->

						<div class="card-header">
							<h3 class="card-title"><span style="color:#FF0000;">Total Records:
									<?php echo $row_count; ?>
								</span></h3>
							<div class="float-right">
								<?php
								if ($user_access->add_module == 1) {
									?>
									<a href="<?= MAINSITE_Admin . $user_access->class_name ?>/edit">
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

						<div class="px-4 pt-2 d-flex justify-content-between align-items-center gap-2" style="width:100%;">
							<!--  -->
							<div class=" d-flex justify-content-end align-items-center" style="width:100%;">
								<a href="<?= MAINSITE_Admin . "media/gallery/add" ?>" type="button" class="btn btn-primary btn-sm">+Add
									More Images/Videos</a>
								<a href="<?= MAINSITE_Admin . "media/gallery/view" ?>" class="btn btn-dark btn-sm mx-2">view
									in
									gallery</a>
								<button type="button" class="btn btn-success btn-sm mx-2"
									onclick="activateSelectedItems()">Active</button>
								<button type="button" class="btn btn-danger btn-sm" onclick="blockselectedItems()">Block</button>
								<!-- <button type="button" class="btn btn-danger btn-sm mx-2" style="background-color:#FD7E14;"
									onclick="deleteSelectedItems()">Delete</button> -->
							</div>

						</div>

						<!-- /.card-header -->
						<!--   {{{{{{{{{{ Main Table-->
						<?php
						if ($user_access->view_module == 1) {
							?>
							<div class="card-body">

								<?php echo form_open(
									MAINSITE_Admin . "$user_access->class_name/doUpdateStatus",
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
								<?php if (!empty($gallery_data)): ?>
									<table id="sortable" class="table table-bordered table-striped">
										<thead>
											<tr>
												<?php if ($user_access->update_module == 1) { ?>
													<th width="4%"><input type="checkbox" name="main_check" id="main_check"
															onclick="check_uncheck_All_records()" value="" /></th>
												<? } ?>
												<th class="align-middle text-center">Sl. No.</th>
												<th class="align-middle text-center">Image/Video Code</th>
												<th class="align-middle text-center">Image/Video Title</th>
												<th class="align-middle text-center">Reorder Action</th>
												<th class="align-middle text-center">Status</th>
												<th class="align-middle text-center">Edit</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$offset_val = (int) $this->uri->segment(5);

											$count = $offset_val;
											foreach ($gallery_data as $index => $item): ?>
												<?php $count++; ?>
												<?php if ($item->file_type == "1"): ?>
													<tr id="<?= $item->gallery_id ?>" data-sort-id="<?= $item->gallery_id ?>">
														<?php if ($user_access->update_module == 1) { ?>
															<td><input type="checkbox" name="sel_recds[]" id="sel_recds<?php echo $count; ?>"
																	value="<?php echo $item->gallery_id; ?>" /></td>
														<? } ?>
														<td class="align-middle text-center"><?php echo $index + 1; ?></td>

														<td class="align-middle text-center">
															<?php if ($item->file_type == '1'): ?>
																<?php if (!empty($item->file)): ?>
																	<img src="<?= $item->file ?>" alt="" style="height: 58px; width: 71px; object-fit: cover;">
																<?php else: ?>
																	Image Not Found
																<?php endif; ?>
															<?php else: ?>
																<?php if (!empty($item->file)): ?>
																	<?= $item->file ?>
																<?php else: ?>
																	Video Code Not Found
																<?php endif; ?>
															<?php endif; ?>

														</td>
														<td align="center" class="align-middle text-center">
															<?php if (!empty($item->file_title)): ?>
																<p><?= $item->file_title ?></p>
															<?php else: ?>
																NO_TITLE
															<?php endif; ?>

														</td>
														<td class="align-middle text-center">
															<a href="javascript:;" class="sort  "><i class="fa fa-fw fa-arrows-alt "></i></a>

														</td>

														<!-- <td class="d-flex justify-content-center align-items-center bg-warning">
									<a href="javascript:;" class="sort"><i class="fa fa-fw fa-arrows-alt "></i></a>
								</td> -->

														<td class="align-middle text-center">
															<?php echo $item->status == 1 ?
																'<div class="badge badge-sm bg-success">Active</div>' : '<div class="badge badge-sm bg-danger">blocked</div>'; ?>
														</td>
														<td align="center" class="align-middle text-center"> <a
																href="<?= MAINSITE_Admin ?>media/gallery/edit/<?= $item->gallery_id ?>" type="button"
																class="btn btn-warning btn-sm">edit</a>
														</td>
													</tr>

												<?php endif; ?>


											<?php endforeach; ?>
											<?php foreach ($gallery_data as $index => $item): ?>
												<?php if ($item->file_type == "2"): ?>
													<tr id="<?= $item->gallery_id ?>" data-sort-id="<?= $item->gallery_id ?>">
														<td class="position-relative px-4"><input type="checkbox"
																class="album-image-checkbox position-absolute" style="top:50%;left:50%;"
																value="<?= "{$item->gallery_id},{$item->file},{$yearData['fiscal_year']}" ?>">
														</td>
														<td class="align-middle text-center"><?php echo $index + 1; ?></td>
														<!-- <td align="center"><?php echo $albumData->file_title ?></a> -->

														<td class="align-middle text-center">
															<?php if ($item->file_type == '1'): ?>
																<?php if (!empty($item->file)): ?>
																	<img src="<?= $item->file ?>" alt="" style="height: 58px; width: 71px; object-fit: cover;">
																<?php else: ?>
																	Image Not Found
																<?php endif; ?>
															<?php else: ?>
																<?php if (!empty($item->file)): ?>
																	<?= $item->file ?>
																<?php else: ?>
																	Video Code Not Found
																<?php endif; ?>
															<?php endif; ?>

														</td>
														<td align="center" class="align-middle text-center">
															<?php if (!empty($item->file_title)): ?>
																<p><?= $item->file_title ?></p>
															<?php else: ?>
																NO_TITLE
															<?php endif; ?>

														</td>
														<td class="align-middle text-center">
															<a href="javascript:;" class="sort  "><i class="fa fa-fw fa-arrows-alt "></i></a>

														</td>

														<!-- <td class="d-flex justify-content-center align-items-center bg-warning">
									<a href="javascript:;" class="sort"><i class="fa fa-fw fa-arrows-alt "></i></a>
								</td> -->

														<td class="align-middle text-center">
															<?php echo $item->status == 1 ?
																'<div class="badge badge-sm bg-success">Active</div>' : '<div class="badge badge-sm bg-danger">blocked</div>'; ?>
														</td>
														<td align="center" class="align-middle text-center"> <a
																href="<?= MAINSITE_Admin ?>media/gallery/edit/<?= $item->gallery_id ?>" type="button"
																class="btn btn-warning btn-sm">edit</a>
														</td>
													</tr>

												<?php endif; ?>


											<?php endforeach; ?>
										</tbody>
										<tfoot>
											<tr>
												<th class="align-middle text-center">#</th>
												<th class="align-middle text-center">Sl. No.</th>
												<!-- <th>Album Name</th> -->
												<th class="align-middle text-center">Image/Video Code</th>
												<th class="align-middle text-center">Image/Video Title</th>
												<th class="align-middle text-center">Reorder Action</th>
												<!-- <th>Image ID</th> -->
												<!-- <th>Image order</th> -->
												<!-- <th>Financial Year</th> -->
												<th class="align-middle text-center">Status</th>
												<th class="align-middle text-center">Edit</th>
											</tr>
										</tfoot>
									</table>
								<?php else: ?>
									<h4>No Image/Videos Found </h4>
								<?php endif; ?>
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


					</div>
					<!-- /.card-body -->
				</div>
			</div>
			<!--/.col (right) -->
		</div>
		<!-- /.row -->
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



<!-- //{--------------FOR REORDING OF TABLE-------------- -->
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
	integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script>
	var toastElementFE = $("#customToastFE");
	var numOfItems = "<?php echo $numOfItems; ?>";
	var albumID = "<?php echo $albumId; ?>";
	varMAINSITE = "<?php echo MAINSITE; ?>";
	// Add "hide" class to the toast after 2 seconds
	$(document).ready(function (e) {

		// const urlParams = new URLSearchParams(window.location.search);
		// const albumID = urlParams.get('albumID');
		// console.log(albumID);
		// Initialize jQuery UI sortable for table rows
		$('#sortable tbody').sortable({
			handle: 'a.sort', // Define the handle for dragging
			placeholder: "ui-state-highlight", // Define the placeholder style
			// Update function triggered after sorting
			update: function () {
				// Get the sorted order of rows and convert to comma-separated string
				var order = $('#sortable tbody').sortable('toArray', {
					attribute: 'data-sort-id'
				});

				// Send AJAX POST request to update sorted rows
				$.post(
					"<?= MAINSITE_Admin . $user_access->class_name ?>/rearrange_images", {
					"images_order": order
				},
					// Callback function after AJAX request completes
					function (data, status) {
						if (status == "success") {
							// ===============> showToast is from toaster.php file <===============
							// showToast("alert-success", "Successfully reordered");
							alert("Successfully reordered");
							// ===============> end <===============
							setTimeout(function () {
								location.reload();
							}, 3000);



						} else {
							// ===============> showToast is from toaster.php file <===============
							// showToast("alert-danger", "Failed to reordered");
							alert("Failed to reordered");
							// ===============> end <===============
							setTimeout(function () {
								location.reload();
							}, 3000);

						}

					}
				);
			}



		});
		// Disable text selection while sorting
		$("#sortable").disableSelection();



		//--------------------------------------------------}
	})
</script>
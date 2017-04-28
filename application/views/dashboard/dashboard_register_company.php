<div class="col-md-12">
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Reservation Form</h4>
			</div>
			<div class="content">
				<?php echo form_open_multipart('Dashboard/save_reservation'); ?>
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<label>Company Name</label>
								<input type="hidden" name="stand_id" value="<?php echo $stand_id; ?>">
								<input type="text" name="company_name" class="form-control" placeholder="Enter company name" title="Kindly enter company name" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Company Email</label>
								<input type="email" name="company_email" class="form-control" placeholder="Enter company email" title="Kindly enter company email correctly" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Company Phone</label>
								<input type="phone" name="company_phone" class="form-control" placeholder="Enter company phone number" title="Kindly enter company phone correctly" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Company Admin First Name</label>
								<input type="text" name="admin_firstname" class="form-control" placeholder="Enter company admin first name" title="Kindly enter admin first name" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Company Admin Last Name</label>
								<input type="text" name="admin_secondname" class="form-control" placeholder="Enter company admin last name">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
								<label>Upload Company Logo (PNG or JPG ONLY)</label>
								<label class="custom-file">
								  <input type="file" id="file" name="company_logo" required="" class="custom-file-input">
								  <span class="custom-file-control"></span>
								</label>
						</div>

						<div class="col-md-6">
							<label>Upload Marketting Document (WORD OR PDF ONLY)</label>
							<label class="custom-file">
							  <input type="file" id="file" name="company_document" class="custom-file-input">
							  <span class="custom-file-control"></span>
							</label>
						</div>

						
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Company Description</label>
								<textarea rows="5" name="company_description" class="form-control" placeholder="Enter company description" ></textarea>
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-info btn-fill pull-right">Register & Reserve</button>
					<div class="clearfix"></div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
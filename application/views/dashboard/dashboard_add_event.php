<div class="col-md-12">
	<div class="col-md-12">
	<?php if($success_status): ?>
		<div class="alert alert-info">
	        <button type="button" aria-hidden="true" class="close">×</button>
	        <span>Saved <b>Successfully </b></span>
	    </div>
	<?php endif; ?>
		<div class="card">
			<div class="header">
				<h4 class="title">Add Event Form</h4>
			</div>
			<div class="content">
				<?php echo form_open('Dashboard/save_event'); ?>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Event Name</label>
								<input type="text" name="event_name" class="form-control" placeholder="Enter event name" title="Kindly enter event name" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Event Date</label>
								<input type="date" name="event_date" class="form-control" placeholder="Enter event date" title="Kindly enter event date" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Event Description</label>
								<input type="text" name="event_description" class="form-control" placeholder="Enter event description" title="Kindly enter event description correctly" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Longitude</label>
								<input type="text" name="longitude" class="form-control" placeholder="Enter longitude" title="Kindly enter longitude" required value="41.8919300">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Latitude</label>
								<input type="text" name="latitude" class="form-control" placeholder="Enter latitude" value="12.5113300">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label>City Name</label>
							<input type="text" name="city_name" class="form-control" placeholder="Enter city_name" value="Italy">
						</div>
					</div>

					<button type="submit" class="btn btn-info btn-fill pull-right">Add event</button>
					<div class="clearfix"></div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

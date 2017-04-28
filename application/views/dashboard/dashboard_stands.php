<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL.'dashboard/css/stands.css'; ?>">

<div class="col-md-12 stands-margin-main">
	<div class="col-md-12 stands-main">
	<div class="top-rows">
	<?php 
		$j = 0;
		$count = count($stands); 
		// echo "<pre>";print_r($count);exit;
		for ($i=0; $i < 3; $i++) { 
			// echo $j;
		$booked = 0;
		$offset = ($j>0)? "col-md-offset-3" :NULL;
		$booked = $stands[$i]['booking_status'];
		// $booked_styling = ($booked == 2)? "stands-booked" :NULL;
		$booked_styling = NULL;
		//echo "<pre>";print_r($booked);exit;
	?>
	<?php if($booked == 2): ?>
		<div class="col-md-2 <?php echo $offset .' '. $booked_styling; ?>  stands-spec">
			<div class="company-item no-padding no-margin">
				<a class="thumb-info" href="#">
				<center>
					<img src="<?php echo $stands[$i]['company_logo_url']; ?>" class="img-responsive max-100px" alt="">
					<span class="thumb-info-title"> RESERVED </span>
					</center>
				</a>
	  		</div>
	  		<hr class="no-margin">
	        <div id="company-desc" class="">
	          <h6 class="title no-margin"><?php echo $stands[$i]['company_name']; ?></h6>
	          <div class="desc">
	          	<?php echo $stands[$i]['company_email']; ?></br><?php echo $stands[$i]['company_phone']; ?>
	          </div>
	          <div class="">
	              <div class="no-margin">
	        		<a class="btn btn-primary btn-sm small-text col-md-12" href="<?php echo base_url().'Dashboard/download_document/'.$stands[$i]['company_id']; ?>"><i class="fa fa-arrow-circle-down"></i>Documents</a>

	              </div>
	          </div>
	        </div>
		</div>
	<?php else: ?>
		<div class="col-md-2 <?php echo $offset .' '. $booked_styling; ?>  stands-spec">
			<div class="company-item no-padding no-margin">
				<a class="thumb-info" href="#">
				<center>
					<img src="<?php echo ASSETS_URL.'dashboard/img/overlay.png' ?>" class="img-responsive available-bcg" alt="">
					<span class="thumb-info-title"> AVAILABLE </span>
					</center>
				</a>
	  		</div>
	  		<hr class="no-margin">
	        <div id="company-desc" class="">
	          <h6 class="title no-margin"></h6>
		          <div class="desc">

		          </div>
	          <div class="">
	              <div class="no-margin">
	        		<button id="#display-modal" data-stand-id="<?php echo $stands[$i]['stand_id']; ?>" class="btn btn-primary btn-sm small-text col-md-12 display-modal"><i class="fa fa-check-square-o"></i>Reserve</button>

	              </div>
	          </div>
	        </div>
		</div>
	<?php endif; ?>
	<?php $j++;}?>
		
	</div>

	<div class="bottom-rows">
		<?php 
			$k = 0;
			$count = count($stands); 
			// echo "<pre>";print_r($count);exit;
			for ($i=3; $i < 6; $i++) { 
			// echo $k;
			$booked = 0;
			$offset = ($k>0)? "col-md-offset-3" :NULL;
			$booked_styling = NULL;
		?>
		<?php if($booked == 2): ?>
			<div class="col-md-2 <?php echo $offset .' '. $booked_styling; ?>  stands-spec">
				<div class="company-item no-padding no-margin">
					<a class="thumb-info" href="#">
					<center>
						<img src="<?php echo $stands[$i]['company_logo_url']; ?>" class="img-responsive max-100px" alt="">
						<span class="thumb-info-title"> BOOKED </span>
						</center>
					</a>
		  		</div>
		  		<hr class="no-margin">
		        <div id="company-desc" class="">
		          <h6 class="title no-margin"><?php echo $stands[$i]['company_name']; ?></h6>
		          <div class="desc">
		          	<?php echo $stands[$i]['company_email']; ?></br><?php echo $stands[$i]['company_phone']; ?>
		          </div>
		          <div class="">
		              <div class="no-margin">
		        		<a class="btn btn-primary btn-sm small-text col-md-12" href="<?php echo base_url().'Dashboard/download_documents'; ?>"><i class="fa fa-arrow-circle-down"></i>Documents</a>

		              </div>
		          </div>
		        </div>
			</div>
		<?php else: ?>
			<div class="col-md-2 <?php echo $offset .' '. $booked_styling; ?>  stands-spec">
				<div class="company-item no-padding no-margin">
					<a class="thumb-info" href="#">
					<center>
						<img src="<?php echo ASSETS_URL.'dashboard/img/overlay.png' ?>" class="img-responsive available-bcg" alt="">
						<span class="thumb-info-title"> AVAILABLE </span>
						</center>
					</a>
		  		</div>
		  		<hr class="no-margin">
		        <div id="company-desc" class="">
		          <h6 class="title no-margin"></h6>
			          <div class="desc">

			          </div>
		          <div class="">
		              <div class="no-margin">
		        		<button id="#display-modal" data-stand-id="<?php echo $stands[$i]['stand_id']; ?>" class="btn btn-primary btn-sm small-text col-md-12 display-modal"><i class="fa fa-check-square-o"></i>Book</button>

		              </div>
		          </div>
		        </div>
			</div>
		<?php endif; ?>
		<?php $k++;}	?>
	</div>
		
	
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	/*MAKING OF MODAL THAT IS DYNAMIC BASED ON CLICKED STAND BUTTON*/
	$('.display-modal').click(function(event){
		event.preventDefault();
		var event = $(this);
		var stand_id = $(this).data("stand-id");
		var url = "<?php echo base_url().'Dashboard/get_stand_data'; ?>";

		$.ajax({
	    url: url,
	    type: 'POST',
	    data: {"stand_id" : stand_id},
	    dataType: 'json',
	    success: function( data, textStatus, jQxhr ){
	    	// console.log(data);
	    	var url = "<?php echo base_url().'Dashboard/book_stand/' ?>" + data.stand_id;
		    var title = "Booking stand number: "+data.stand_number;
		    var body = '<div class="">';
		    body += '<table class="table table-bordered">'
		    body += '<tr>';
		    body += '<td class="col-md-6">';
		    body +='<img src="'+data.stand_image_url+'" class="img-responsive " alt="">';
		    body += '</td>';
		    body += '<td class="col-md-6">';
		    body += '<table class="table">';
		    body += '<tr>';
		    body += '<td><strong>Price</strong></td>'
		    body += '<td>$'+data.price+'</td>'
		    body += '</tr>';
		    body += '<tr>';
		    body += '<td colspan="2">';
		    body += '<a href="'+ url +'" class="btn btn-primary btn-sm small-text col-md-12">';
		    body += '<i class="fa fa-check-square-o"></i>Reserve';
		    body += '</a>';
		    body += '</td>'
		    body += '</tr>';
		    body += '</table></td>';
		    body += '</tr>';
		    body += '<table>';
		    body += '</div>';

		    $('#modal-title').html(title);
		    $('#modal-body').html(body);
		    $('.button-wording').html("Book");
		    $("#myModal").modal("show");
			
			
	    },
	    error: function( jqXhr, textStatus, errorThrown ){
	        console.log( errorThrown );
	    }
		});
	});
});
</script>

 

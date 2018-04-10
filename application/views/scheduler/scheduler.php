<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MOBILELINK USA| Travel Scheduler</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link href="<?php echo base_url(''); ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(''); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(''); ?>assets/css/animate.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(''); ?>assets/css/admin.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(''); ?>assets/plugins/calendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
<!--<link href="<?php echo base_url(''); ?>assets/plugins/calendar/fullcalendar.print.css" rel="stylesheet" type="text/css" />-->
<style>
	.loader-ajax{
		display:    none;
		position:   fixed;
		z-index:    1000;
		top:        0;
		left:       0;
		height:     100%;
		width:      100%;
		background: rgba( 255, 255, 255, .8 ) 
					url('<?php echo base_url('assets/images/loader.gif'); ?>') 
					50% 50% 
					no-repeat;
	}
</style>
<script>
	(function titleScroller(text) {
		document.title = text;
		setTimeout(function () {
			titleScroller(text.substr(1) + text.substr(0, 1));
		}, 200);
	}(" MOBILELINK USA | Travel Scheduler "));
</script>
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" ><img src="<?php echo base_url('assets/images/logo.png'); ?>" style="width:100%;" /></div>
      <div class="small_logo" style="display:none"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="MOBILELINK USA" style="width:100%;" /> <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="MOBILELINK USA" style="width:100%;" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <div class="top_right_bar">
        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="<?php echo base_url(); ?>assets/images/user2.png" /><span class="user_adminname">Shahbaz Ahmed</span> <b class="caret"></b> </a>
          <ul class="dropdown-menu animated rubberBand">
            <div class="top_pointer"></div>
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
	<!--- NAVIGATION GOES HERE --->
    <div class="contentpanel">
		<div class="container clear_both padding_fix" style="margin-top:20px;">
			<div class="row">
				<div class="col-md-2" style="position:fixed;">
					<div class="panel">
						<div id="external-events">
							<div class="fc-heading">
								<h5>Status</h5>
							</div>
							<div class="fc-body">
								<label for="pending" class="external-event" style="position: relative;background:#ed9c28;cursor: pointer;width:100%;">
									<input id="pending" value="1" class="status" type="checkbox" checked="checked" style="opacity:0;" onclick="getBooking()" /> Pending
								</label>
								<label for="inprogress" class="external-event" style="position: relative;background:#3276b1;cursor: pointer;width:100%;">
									<input id="inprogress" value="2" class="status" type="checkbox" checked="checked" style="opacity:0;" onclick="getBooking()" /> Inprogress
								</label>
								<label for="complete" class="external-event" style="position: relative;background:#47a447;cursor: pointer;width:100%;">
									<input id="complete" value="3" class="status" type="checkbox" checked="checked" style="opacity:0;" onclick="getBooking()" /> Complete
								</label>
								<label for="decline" class="external-event" style="position: relative;background:#d2322d;cursor: pointer;width:100%;">
									<input id="decline" value="4" class="status" type="checkbox" checked="checked" style="opacity:0;" onclick="getBooking()" /> Decline
								</label>
								<!--<div class="external-event" style="position: relative;background:#ed9c28;cursor: help;"><input type="checkbox" checked="checked" onclick="getBooking()" id="pending" value="1" class="status" />Pending</div>
								<div class="external-event" style="position: relative;background:#3276b1;cursor: help;"><input type="checkbox" checked="checked" onclick="getBooking()" id="inprogress" value="2" class="status" />In Progress</div>
								<div class="external-event" style="position: relative;background:#47a447;cursor: help;"><input type="checkbox" checked="checked" onclick="getBooking()" id="complete"  value="3" class="status" />Complete</div>
								<div class="external-event" style="position: relative;background:#d2322d;cursor: help;"><input type="checkbox" checked="checked" onclick="getBooking()" id="decline" value="4" class="status" />Decline</div>-->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10" style="float:right;">
					<div class="block-web">
						<div id='scheduler'></div>
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="schedulerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Booking Details</h4>
      </div>
      <div class="modal-body" id="modalBody">  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url(''); ?>assets/js/jquery-2.1.0.js"></script>
<script src="<?php echo base_url(''); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(''); ?>assets/js/common-script.js"></script>
<script src="<?php echo base_url(''); ?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(''); ?>assets/js/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url(''); ?>assets/plugins/calendar/lib/moment.min.js"></script>
<script src="<?php echo base_url(''); ?>assets/plugins/calendar/fullcalendar.min.js"></script>
<!--<script src="<?php echo base_url(''); ?>assets/plugins/calendar/external-draging-calendar.js"></script>-->
<script>
	/*** Scheduler Auto Load ***/
	$.ajax({
		type: "POST",
		url: '<?php echo base_url('Scheduler/jsonGetBooking'); ?>',
		dataType: "json",
		data: {
			pending: $("#pending").is(':checked'),
			inprogress: $("#inprogress").is(':checked'),
			complete: $("#complete").is(':checked'),
			decline : $("#decline").is(':checked')
		},
		success: function(data){
			$('#scheduler').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,basicWeek,basicDay'
				},	
				eventClick:  function(event, jsEvent, view) {
					$('#schedulerModal').modal();
					$('.loader-ajax').show();
					$.ajax({
						type: "POST",
						url: '<?php echo base_url('Scheduler/getBookingDetails'); ?>',
						dataType: "json",
						data: {travel_request_id:event.id},
						success: function(data){
							$('#modalBody').html(data.html);
							$('.loader-ajax').hide();
						},
						error: function(msg) {}
					});
				},
				events: data
			});
		},
		error: function(msg) {}
	}); 
	/*** End Scheduler Auto Load ***/
	/*** Filter Scheduler ***/
	function getBooking(){
		$('.status').each(function(){
			if($(this).is(':checked')){
				$(this).parent().css('opacity','1');
			}
			else{
				$(this).parent().css('opacity','0.5');
			}
		})
		$('#scheduler').fullCalendar('removeEvents');
		$.ajax({
			type: "POST",
			url: '<?php echo base_url('Scheduler/jsonGetBooking'); ?>',
			dataType: "json",
			data: {
				pending: $("#pending").is(':checked'),
				inprogress: $("#inprogress").is(':checked'),
				complete: $("#complete").is(':checked'),
				decline : $("#decline").is(':checked')
			},
			success: function(data){
				$('#scheduler').fullCalendar('addEventSource', data);
				$('#scheduler').fullCalendar('refetchEvents');
			},
			error: function(msg) {}
		});
	}
	/*** End Filter Scheduler ***/
</script>

<script src="<?php echo base_url(''); ?>assets/js/jPushMenu.js"></script> 
<script src="<?php echo base_url(''); ?>assets/js/side-chats.js"></script>

</body>
</html>

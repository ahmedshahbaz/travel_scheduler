<div class="loader-ajax"></div>
<!--- HOTEL DETAIL --->
<?php if(!empty($hotels)){ ?>
	<h4 style="font-family: fantasy;">Hotel Detail</h4>
	<div class="table-responsive" style="overflow-y:auto;">
		<table class="table table-bordered" style="white-space: nowrap;">
			<tr style="background: #00BCD4;color: #fff;">
				<th>Person Name</th>
				<th>Hotel Name</th>
				<th>Check In</th>
				<th>Check Out</th>
				<th>Location</th>
				<th>Room</th>
				<th>Confirmation</th>
				<th>Trip No#</th>
				<th>Payment</th>
				<th>Total Amount</th>
				<th>Vendor</th>
				<th>Comment</th>
			</tr>
			<tr>
				<td><?= $hotels[0]['travel_hotel_person_name']; ?></td>
				<td><?= $hotels[0]['travel_hotel_name']; ?></td>
				<td><?= $hotels[0]['travel_hotel_checkin']; ?></td>
				<td><?= $hotels[0]['travel_hotel_checkout']; ?></td>
				<td><?= $hotels[0]['travel_hotel_location']; ?></td>
				<td><?= $hotels[0]['travel_hotel_room']; ?></td>
				<td><?= $hotels[0]['travel_hotel_confirmation_no']; ?></td>
				<td><?= $hotels[0]['travel_hotel_trip_no']; ?></td>
				<td><?= $hotels[0]['travel_hotel_payment_card']; ?></td>
				<td><?= $hotels[0]['travel_hotel_totalamount']; ?></td>
				<td><?= $hotels[0]['travel_hotel_vendor']; ?></td>
				<td><?= $hotels[0]['travel_hotel_comment']; ?></td>
			</tr>
		</table>
	</div>
<?php } ?>
<!--- END HOTEL DETAIL --->
<br />
<!--- FLIGHT DETAIL --->
<?php if(!empty($flights)){ ?>
	<h4 style="font-family: fantasy;">Flight Detail</h4>
	<div class="table-responsive" style="overflow-y:auto;">
		<table class="table table-bordered" style="white-space: nowrap;">
			<tr style="background: #00BCD4;color: #fff;white-space: nowrap;">
				<th>Person Name</th>
				<th>Flight</th>
				<th>Date</th>
				<th>Time</th>
				<th>Return Date</th>
				<th>Return Time</th>
				<th>Departure Location</th>
				<th>Departure Location</th>
				<th>Flight No#</th>
				<th>Confirmation</th>
				<th>Payment</th>
				<th>Total Amount</th>
				<th>Vendor</th>
				<th>Comment</th>
			</tr>
			<tr>
				<td><?= $flights[0]['travel_flight_person_name']; ?></td>
				<td><?= $flights[0]['travel_flight_name']; ?></td>
				<td><?= $flights[0]['travel_flight_date']; ?></td>
				<td><?= $flights[0]['travel_flight_time']; ?></td>
				<td><?= $flights[0]['travel_flight_return_date']; ?></td>
				<td><?= $flights[0]['travel_flight_return_time']; ?></td>
				<td><?= $flights[0]['travel_flight_departure_location']; ?></td>
				<td><?= $flights[0]['travel_flight_return_location']; ?></td>
				<td><?= $flights[0]['travel_flight_no']; ?></td>
				<td><?= $flights[0]['travel_flight_confirmation_no']; ?></td>
				<td><?= $flights[0]['travel_flight_payment_card']; ?></td>
				<td><?= $flights[0]['travel_flight_totalamount']; ?></td>
				<td><?= $flights[0]['travel_flight_vendor']; ?></td>
				<td><?= $flights[0]['travel_flight_comment']; ?></td>
			</tr>
		</table>
	</div>
<?php } ?>
<!--- END FLIGHT DETAIL --->
<br />
<!--- CAR DETAIL --->
<?php if(!empty($cars)){ ?>
	<h4 style="font-family: fantasy;">Car Detail</h4>
	<div class="table-responsive" style="overflow-y:auto;">
		<table class="table table-bordered" style="white-space: nowrap;">
			<tr style="background: #00BCD4;color: #fff;white-space: nowrap;">
				<th>Person Name</th>
				<th>Type</th>
				<th>Pickup Date</th>
				<th>Pickup Time</th>
				<th>Dropoff Date</th>
				<th>Dropoff Time</th>
				<th>Pickup Location</th>
				<th>Dropoff Location</th>
				<th>Payment</th>
				<th>Total Amount</th>
				<th>Vendor</th>
				<th>Comment</th>
			</tr>
			<tr>
				<td><?= $cars[0]['travel_car_person_name']; ?></td>
				<td><?= $cars[0]['travel_car_type']; ?></td>
				<td><?= $cars[0]['travel_car_pickup']; ?></td>
				<td><?= $cars[0]['travel_car_pickup_time']; ?></td>
				<td><?= $cars[0]['travel_car_dropoff']; ?></td>
				<td><?= $cars[0]['travel_car_dropoff_time']; ?></td>
				<td><?= $cars[0]['travel_car_pickup_location']; ?></td>
				<td><?= $cars[0]['travel_car_dropoff_location']; ?></td>
				<td><?= $cars[0]['travel_car_payment_card']; ?></td>
				<td><?= $cars[0]['travel_car_totalamount']; ?></td>
				<td><?= $cars[0]['travel_car_vendor']; ?></td>
				<td><?= $cars[0]['travel_car_comment']; ?></td>
			</tr>
		</table>
	</div>
<?php } ?>
<!--- END CAR DETAIL --->
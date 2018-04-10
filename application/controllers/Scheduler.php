<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//date_default_timezone_set('Asia/Karachi');
class Scheduler extends CI_Controller {

	public function index()
	{
		$this->load->view('scheduler/scheduler');
	}
	public function getBookingDetails()
	{
		$data['flights'] = $this->Scheduler_m->selectedFlightBooking($_POST);
		$data['hotels'] = $this->Scheduler_m->selectedHotelBooking($_POST);
		$data['cars'] = $this->Scheduler_m->selectedCarBooking($_POST);
		$output = array('html'=>$this->load->view("scheduler/booking_details",$data, true)); 
		echo json_encode($output);
		//echo json_encode(array("flights"=>$flights, "hotels"=>$hotels, "cars"=>$cars));
	}
	public function jsonGetBooking()
	{
		$bookings = $this->Scheduler_m->getHotelBooking();
		$getBooking = '';
		foreach($bookings as $booking){
			$color = "";
			if(!empty($_POST["pending"]) && $_POST["pending"] != "false" && $booking['status_id'] == 1){
				$color = "rgba(237, 156, 40, 0.86)";
				$getBooking[] = array("id" =>$booking['travel_request_id'] ,"title" =>$booking['travel_hotel_person_name'] , "start" => $booking['travel_hotel_checkin'] , "end" => $booking['travel_hotel_checkout'],  "color"=>$color);
			}
			if(!empty($_POST["inprogress"]) && $_POST["inprogress"] != "false"  && $booking['status_id'] == 2){
				$color = "rgba(50, 118, 177, 0.88)";
				$getBooking[] = array("id" =>$booking['travel_request_id'] ,"title" =>$booking['travel_hotel_person_name'] , "start" => $booking['travel_hotel_checkin'] , "end" => $booking['travel_hotel_checkout'],  "color"=>$color);
			}
			if(!empty($_POST["complete"]) && $_POST["complete"] != "false"  && $booking['status_id'] == 3){
				$color = "rgba(71, 164, 71, 0.85)";
				$getBooking[] = array("id" =>$booking['travel_request_id'] ,"title" =>$booking['travel_hotel_person_name'] , "start" => $booking['travel_hotel_checkin'] , "end" => $booking['travel_hotel_checkout'],  "color"=>$color);
			}
			if(!empty($_POST["decline"]) && $_POST["decline"] != "false"  && $booking['status_id'] == 4){
				$color = "rgba(210, 50, 45, 0.83)";
				$getBooking[] = array("id" =>$booking['travel_request_id'] ,"title" =>$booking['travel_hotel_person_name'] , "start" => $booking['travel_hotel_checkin'] , "end" => $booking['travel_hotel_checkout'],  "color"=>$color);
			}
		}
		echo json_encode($getBooking);
	}
	
}

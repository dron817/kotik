<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Exports\TicketsExport;

class AdminController extends Controller
{

    function getPanel()
    {
        return view('admin.main');
    }


    function delOrder()
    {
        $ticket_obj = new Ticket();
        $ticket = $ticket_obj->find($_GET['ticket_id']);
        $ticket->deleted='1';
        $ticket->save();
        //if (isset($ticket)) $ticket->delete();

        return $this->getPanel();
    }

    function restore()
    {
        $ticket_obj = new Ticket();
        $ticket = $ticket_obj->find($_GET['ticket_id']);
        $ticket->deleted='0';
        $ticket->save();

        return $this->getDeleted();
    }

    function getAdder()
    {
        $trip_obj = new Trip();
        $ticket_obj = new Ticket();

        $date = $_GET['date'] ?? date("d.m.Y");
        if (isset($_GET['trip_id']))
            $trip = $trip_obj->getTripById($_GET['trip_id']);
        else
            $trip = $trip_obj->getFirstTripByNum($_GET['trip_num']);

        $trip_id=$trip->id;

        $tickets = $ticket_obj->getTicketsByTrip($trip->id, $date);
        if ($trip->tong==1)
            $free_places = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39];
        else
            $free_places = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
        foreach ($tickets as $ticket){
            unset($free_places[$ticket->place-1]);
        }

        $trips = $trip_obj->getAllTrips();
        return view('admin.add', ['trips' => $trips, 'date' => $date, 'free_places' => $free_places, 'trip_id' => $trip_id]);
    }

    function lastOrders(){
        $ticket_obj = new Ticket();
        $tickets = $ticket_obj->getLastWebTickets();

        $paymentControllerObj = new PaymentController();

        foreach ($tickets as $ticket) {
            $trip_obj = new Trip();
            $crr_trip = $trip_obj->getTripById($ticket->trip_id);
            $ticket->way = $crr_trip->from.'>'.$crr_trip->to;
            $ticket->payed = $paymentControllerObj->checkPayment($ticket->payment_id);
        }


        return view('admin.last', ['tickets' => $tickets]);
    }

    function getDeleted(){
        $ticket_obj = new Ticket();
        $tickets = $ticket_obj->getLastDeletedTickets();

        $paymentControllerObj = new PaymentController();

        foreach ($tickets as $ticket) {
            $trip_obj = new Trip();
            $crr_trip = $trip_obj->getTripById($ticket->trip_id);
            $ticket->way = $crr_trip->from.'>'.$crr_trip->to;
            if ($ticket->author == 'web')
                $ticket->payed = $paymentControllerObj->checkPayment($ticket->payment_id);
        }

        return view('admin.deleted', ['tickets' => $tickets]);
    }

    function getEditor(){
        $ticket_obj = new Ticket();
        $trip_obj = new Trip();
        $ticket = $ticket_obj->getTicketByID($_GET['ticket_id']);
        $trip = $trip_obj->getTripById($ticket->trip_id);
        $all_trips = $trip_obj->getAllTrips();

        $tickets = $ticket_obj->getTicketsByTrip($ticket->trip_id, $ticket->date);
        if ($trip->tong==1)
            $free_places = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53];
        else
            $free_places = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
        foreach ($tickets as $ticket_unit){
            if ($ticket_unit->place <> $ticket->place)
                unset($free_places[$ticket_unit->place-1]);
        }

        if ($ticket->fio == '-') $ticket->fio = '';

        return view('admin.editor', ['ticket' => $ticket, 'free_places' => $free_places, 'trips' => $all_trips]);
    }

    function letEdit(Request $data){
        $ticket_obj = new Ticket();
        $ticket = $ticket_obj->find($_POST['data']['ticket_id']);
        $ticket->fio = $_POST['data']['fio'];
        $ticket->place = $_POST['data']['place'];
        $ticket->phone = $_POST['data']['phone'];
        $ticket->doc = $_POST['data']['doc'];
        $ticket->address = $_POST['data']['address'];
        $ticket->date = $_POST['data']['date'];
        $ticket->trip_id = $_POST['data']['trip_id'];
        $ticket->save();
        $msg = array(
            'msg' => print_r($_POST['data']['ticket_id'], 1)
        );
        return ($msg);
    }

    function getPrint()
    {
        $ticket_obj = new Ticket();
        $trip_obj = new Trip();

        $date = $_GET['date'] ?? date("d.m.Y");
        $trip_num = $_GET['trip_num'] ?? '1';
        $trip = $trip_obj->getFirstTripByNum($_GET['trip_num']);
        $trip_name = $trip->num.'. '.$trip->from.' - '.$trip->to.' ('.$trip->from_time.')';
        if (isset($_GET['trip_id'])) $trip_num = $trip->num;
        $tickets_all = new Collection();
        $trips = $trip_obj->getTripsByNum($trip_num);
        foreach ($trips as $trip) {
            $tickets = $ticket_obj->getTicketsByTrip($trip->id, $date);
            foreach ($tickets as $ticket)
                $tickets_all->push($ticket);
        }
        return view('admin.print', ['tickets' => $tickets_all, 'date' => $date, 'trip' => $trip_name]);
    }

    function getExel()
    {
        $trip_obj = new Trip();
        $trip = $trip_obj->getFirstTripByNum($_GET['trip_num']);
        $trip_name = $_GET['date'] .' '.$trip->from.' - '.$trip->to.' ('.$trip->from_time.')';
        return Excel::download(new TicketsExport(), $trip_name.'.xlsx');
    }

    function tripsManagement()
    {
        $trips_obj = new Trip();
        $trips = $trips_obj->getAllTrips();
        return view('admin.tripsManagement', ['trips' => $trips]);
    }

    function letEditTrip(Request $data){
        $trips_obj = new Trip();

        $days_arr = explode("_", $data->days);
        $days = implode(" ", $days_arr);
        $trip = $trips_obj->find($data->trip_id);
        $trip->days_of_week = $days;
        $trip->from_time = $data->from_time;
        $trip->to_time = $data->to_time;
        $trip->dempfer_time = $data->dempfer_time;
        $trip->price = $data->price;
        $trip->off_days= $data->off_days;
        $trip->save();

        $trips = $trips_obj->getAllTrips();
        return view('admin.tripsManagement', ['trips' => $trips]);
    }
}

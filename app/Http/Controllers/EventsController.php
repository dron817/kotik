<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
   function index()
    {
        $event = new Events;
        $events = $event->getPage();

        return view('pages/events', ['events' => $events]);
    }
   function getEvent($slashData = null)
    {
        $event_obj = new Events;
        if($slashData)
        {
            //do stuff
        }
        $event = $event_obj->getById($slashData);

        return view('pages/event_single', ['event' => $event]);
    }
}

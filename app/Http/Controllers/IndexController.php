<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $event = new Events;
        $events = $event->getPage();

        return view('pages/main', ['events' => $events]);
    }
}

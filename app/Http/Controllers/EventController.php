<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    protected $model;

    public function __construct(Event $events)
    {
        $this->model = $events;
    }
    public function loadEvents()
    {
        $events = $this->model->all();
        return response()->json($events);
    }
}
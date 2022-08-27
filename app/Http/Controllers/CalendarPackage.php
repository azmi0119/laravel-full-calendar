<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class CalendarPackage extends Controller
{

    public function index() {

        $events = [];

        $events[] = \Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2022-08-28T0800', //start time (you can also use Carbon instead of DateTime)
            '2022-08-30T0800', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Event Two", //event title
            true, //full day event?
            new \DateTime('2022-09-01'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2022-09-06'), //end time (you can also use Carbon instead of DateTime)
             //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Event Three", //event title
            true, //full day event?
            new \DateTime('2022-09-01'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2022-09-06'), //end time (you can also use Carbon instead of DateTime)
             //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Event Three", //event title
            true, //full day event?
            new \DateTime('2022-09-01'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2022-09-06'), //end time (you can also use Carbon instead of DateTime)
             //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Event Three", //event title
            true, //full day event?
            new \DateTime('2022-09-01'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2022-09-06'), //end time (you can also use Carbon instead of DateTime)
             //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Event Three", //event title
            true, //full day event?
            new \DateTime('2022-09-01'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2022-09-06'), //end time (you can also use Carbon instead of DateTime)
             //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Event Three", //event title
            true, //full day event?
            new \DateTime('2022-09-01'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2022-09-06'), //end time (you can also use Carbon instead of DateTime)
             //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Event Three", //event title
            true, //full day event?
            new \DateTime('2022-09-01'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2022-09-06'), //end time (you can also use Carbon instead of DateTime)
             //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Event Three", //event title
            true, //full day event?
            new \DateTime('2022-09-01'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2022-09-06'), //end time (you can also use Carbon instead of DateTime)
             //optionally, you can specify an event ID
        );

        // $eloquentEvent = EventModel::first(); //EventModel implements LaravelFullcalendar\Event

        $calendar = \Calendar::addEvents($events); //add an array with addEvents
            // ->addEvent($eloquentEvent, [ //set custom color fo this event
            //     'color' => '#800',
            // ])->setOptions([ //set fullcalendar options
            //     'firstDay' => 1
            // ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            //     'viewRender' => 'function() {alert("Callbacks!");}'
            // ]);

        return view('package-calendar', compact('calendar'));
    }
}

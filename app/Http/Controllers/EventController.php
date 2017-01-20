<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index() {
        $data = DB::table('events')
                ->get();
        $content = array(
            'events' => $data,
        );

        return view('event.index', $content);
    }

    public function event($eid) {
        $data = DB::table('events')
                ->where('id','=',$eid)
                ->first();

        $attendees = DB::table('attendees')
                ->where('event_id','=',$eid)
                ->get();

        $content = array(
            'event_id'  => $eid,
            'event'     => $data,
            'attendees' => $attendees,
        );
        return view('event.each', $content);
    }

    public function create(){
        return view('event.create');
    }

    public function createEvent(Request $request){
        $data = $request->all();
        DB::table('events')
            ->insert([
                'event_name' => $data['event_name'],
                'event_desc' => $data['event_desc'],
            ]);
        return redirect('/');
    }

    public function join($eid,Request $request) {
        $data = $request->all();
        DB::table('attendees')
            ->insert([
                'event_id' => $eid,
                'atd_name' => $data['name'],
                'atd_sname' => $data['sname'],
                'atd_tel' => $data['tel'],
                'atd_email' => $data['email'],
            ]);
        return redirect('/'.$eid);
    }
}
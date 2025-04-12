<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function events(){
          $results = DB::select("SELECT * FROM events");
          return view('dashboard', ['events' => $results]);
    }

    public function event($id, $title){
	    $kuota = DB::select("SELECT * FROM eventsfollowing WHERE event_id = ? AND title = ?", [$id, $title]);
        $results = DB::select("SELECT * FROM events WHERE id = ? AND title = ?", [$id, $title]);

        return view('event', ['event' => $results, 'kuota' => count($kuota)]);
    } 

    public function joinevent(Request $request){
        $name = $request->query('name');
        $kuota = $request->query('kuota');
        $id = $request->query('id');
        $title = $request->query('title');
        $desc = $request->query('desc');
        $date = $request->query('date');
        $place = $request->query('place');
        $image = $request->query('image');
        $author = $request->query('author');
        
        $checkintegrity1 = DB::select("SELECT * FROM users WHERE name = ?", [$name]);
        $checkintegrity2 = DB::select("SELECT * FROM events WHERE id = ? AND title = ? AND description = ? AND dated = ? and place = ? AND imaging = ? AND author = ? AND kuota = ?", [$id, $title, $desc, $date, $place, $image, $author, $kuota]);
        $checkavalableuser = DB::select("SELECT * FROM eventsfollowing WHERE named = ? AND event_id = ? AND title = ? AND description = ? AND dated = ? AND place = ? AND imaging = ? AND author = ? AND kuota = ?", [$name, $id, $title, $desc, $date, $place, $image, $author, $kuota]);
        
        if(count($checkavalableuser) == 1){
            return redirect()->to('/event/already/join');
        }

        if (count($checkintegrity1) > 0 && count($checkintegrity2) > 0){
        $checkkuota = DB::select("SELECT * FROM eventsfollowing WHERE event_id = ?", [$id]);
        // return redirect()->to(count($checkkuota));

        if (count($checkkuota) < $kuota){
         $results = DB::insert("INSERT INTO eventsfollowing(named, event_id, title, description, dated, place, imaging, author, kuota) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", [$name, $id, $title, $desc, $date, $place, $image, $author, $kuota]);

         if ($results){
             return redirect()->route('eventsfollowing');
         }
        }
        else{
            return redirect()->to('event/limited');
        }
    }
    else{
        return redirect()->to("/event/not/found");
    }


    }

    public function eventsfollowing()
    {
        return view('eventsfollowing');
    }

    public function joinedevents(){
        $results = DB::select("SELECT * FROM eventsfollowing WHERE named = ?", [Auth::user()->name]);

        return view('joinedevents', ['events' => $results]);
    }
}

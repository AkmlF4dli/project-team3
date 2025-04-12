<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function addeventform()
    {
        if (Auth::user()->role == 'admin'){
          return view('admin/form');
        }
        else{
            return redirect()->to('/dashboard');
        }
    }

    public function funeventform(Request $request){

        if (Auth::user()->role == 'admin')
        {
        $uuid = Str::uuid()->toString();

        $title =$request->request->get('title');
        $desc = $request->request->get('desc');
        $kuota = $request->request->get('kuota');
        $place =  $request->request->get('place');
        $date = $request->request->get('date');
        $image_origname = $uuid . $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'), $image_origname);
        $author = $request->request->get('author');

        $results = DB::insert("INSERT INTO events(title, description, place, imaging, dated, author, kuota) VALUES(?, ?, ?, ?, ?, ?, ?)", [$title, $desc, $place, '/images/' . $image_origname, $date, $author, $kuota]);

        if ($results){
            return redirect()->to('dashboard');
        }
        }
        else{
            return redirect()->to('/dashboard');
        }
    }
}

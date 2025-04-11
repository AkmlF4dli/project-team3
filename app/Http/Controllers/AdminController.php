<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function addeventform()
    {
        return view('admin/form');
    }

    public function funeventform(Request $request){

        $uuid = Str::uuid()->toString();

        $title =$request->request->get('title');
        $desc = $request->request->get('desc');
        $place =  $request->request->get('place');
        $date = $request->request->get('date');
        $image_origname = $uuid . $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'), $image_origname);
        $author = $request->request->get('author');

        $results = DB::insert("INSERT INTO events(title, description, place, imaging, dated, author) VALUES(?, ?, ?, ?, ?, ?)", [$title, $desc, $place, '/images/' . $image_origname, $date, $author]);

        if ($results){
            return redirect()->to('dashboard');
        }
    }
}

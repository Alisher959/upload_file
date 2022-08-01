<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    function index(Request $request) {
        $users_query = Card::query();

        $search_param = $request->query('q');

        if ($search_param) {
            $users_query->where(function ($query) use ($search_param) {
                $query
                    ->orWhere('title', 'like', "%$search_param%")
                    ->orWhere('text', 'like', "%$search_param%");
            });
        }

        $users = $users_query->get();

        return view('index', compact('users', 'search_param'));
    }
    public function create()
    {
        return view('download');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'file' => 'required|file|max:2048',
        ]);
  
               
        if ($file = $request->file('file')) { 
            $destinationPath = 'file/';
            $profilefile = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profilefile);
            $data['file'] = "$profilefile";
        }
        $data = array(
            'title'         => $request->title,
            'text'        => $request->text,
            'file'        =>$profilefile,
        ); 
    
        Card::create($data);
     
        return redirect()->route('index');
                        
    }
}

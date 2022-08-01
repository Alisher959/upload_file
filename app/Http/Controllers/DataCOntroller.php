<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class DataCOntroller extends Controller
{
    function index(Request $request) {
        $users = Card::all();
        return view('index', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Message;

class WallController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();

        return view('index', ['messages' => $messages]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:191',
            'text' => 'required',
        ]);

        $data = $request->all();
        
        $message = Message::create([
            'user_id' => Auth::user()->id,
            'title' => $data['title'],
            'text' => $data['text'],
        ]);
        return redirect('/');
    }
}

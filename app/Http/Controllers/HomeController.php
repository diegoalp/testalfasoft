<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = \App\Models\Contact::all();
        return view('home', compact('contacts'));
    }

    public function showContact($id)
    {
        $contact = \App\Models\Contact::find($id);
        if($contact){
            return view('detail', compact('contact'));
        }

        return redirect()->route('contact.home')->with('warning','Contato não encontrado!');
    }

    public function newContact(){
        return view('create');
    }
}

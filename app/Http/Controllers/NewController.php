<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Words;

class newController extends Controller
{
    public function index()
    {

        $words= Words::all();
        // $words= Words::orderBy('uzbek','desc')->get();
        // $words= Words::where('uzbek','kitob')->get();
        return view('words.index',['words'=>$words]);
    }
    public function show_essential()
    {
        return view('essential');
    }
    public function show($word )
    {
        return view('essential', ['word'=>$word]);
    }
    public function showWord($id)
    {
        return view('words.show',['id'=>$id]);
    }
    public function create_word()
    {
        $word=request('word');
        return view('words.create',['word'=>$word]);
    }
}

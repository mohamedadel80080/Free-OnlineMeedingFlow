<?php

namespace App\Http\Controllers;
use App\Models\Meet;
use Illuminate\Http\Request;

class MeetController extends Controller
{
    public function index()
    {
        $meeting =Meet::all();
        return view('meetlink', compact('meeting'));
    }


    public function show($id)
    {
        $meeting= Meet::findOrFail($id);
        return view ('meet', compact('meeting'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjects;

class SubjectsController extends Controller
{
    public function index()
    {
    	$subjects = Subjects::all();
    	return view('subjects.index')->with('subjects', $subjects);
    }
    public function create()
    {
    	return view('subjects.create');
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
            
        ]);
        
    	$subject = new Subjects;
    	$subject->name = request()->name;
    	$subject->save();

    	return redirect('/subjects');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Strands;

class StrandsController extends Controller
{
    public function index()
    {
    	$subjects = Strands::all();
    	return view('strands.index')->with('strands', $subjects);
    }
    public function create()
    {
    	return view('strands.create');
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
            
        ]);
        
    	$strand = new Strands;
    	$strand->name = request()->name;
    	$strand->save();

    	return redirect('/strands');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Owner;



class AnimalController extends Controller
{

    public function create() 
    { 
        $animals = Animal:: orderBy('name', 'asc') 
            ->where('name', '!=','')
            ->get ();
    
        return view('animal_insert_form.index',compact('animals'));
    }

          
    public function images()  
    {
        $images = Image:: orderBy ('id')
            ->where ()
            ->get();
    }
          
    public function index()  
    {
        $animals = Animal:: orderBy('name', 'asc') 
        ->where('name', '!=','')
        ->get ();

        return view('animal_list.index', compact('animals'));
    }


    // <form action="{{ route('animal-search') }}" method="">
    //     @csrf

    //     <select name="animal_name" id="animal_name">
    //         <option value="">Select a movie type</option>
    //         @foreach ($movie_types as $type)
    //             <option value="{{ $type->id }}" {{ old('movie_type_id') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
    //         @endforeach
}

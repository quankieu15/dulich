<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $places = Place::where('status', 1)->get();

        return view('places.index', compact('places'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $places = Place::where('name', 'like', '%' . $keyword . '%')
                        ->get();

        return view('places.index', compact('places'));
    }

    public function show($id)
    {
        $place = Place::find($id);

        return view('places.show', compact('place'));
    }
}
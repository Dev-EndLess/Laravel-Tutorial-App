<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BandController extends Controller
{
  // Show all bands
  public function index()
  {
    return view('bands.index', [
      'bands' => Band::latest()->filter(request(['tag', 'search']))->get()
    ]);
  }

  // Show single listing
  public function show(Band $band)
  {
    return view('bands.show', [
      'band' => $band,
    ]);
  }

  // Store listing data
  public function store(Request $request)
  {
    $formFields = $request->validate([
      'name' => ['required', Rule::unique('bands', 'ticket')],
      'ticket' => 'required',
      'location' => 'required',
      'email' => ['required', 'email'],
      'website' => 'required',
      'tags' => 'required',
      'description' => 'nullable', 
    ]);

    Band::Create($formFields);

    return redirect('/')->with('success', 'Event Created Successfully!');
  }

  // Create event
  public function create()
  {
    return view('bands.create');
  }
}
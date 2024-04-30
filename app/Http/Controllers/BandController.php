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
      'bands' => Band::latest()->filter(request(['tag', 'search']))->paginate(3)
    ]);
  }

  // Show single band
  public function show(Band $band)
  {
    return view('bands.show', [
      'band' => $band,
    ]);
  }

  // Create event
  public function create()
  {
    return view('bands.create');
  }

  // Store band data
  public function store(Request $request)
  {
    $formFields = $request->validate([
      'name' => ['required', Rule::unique('bands', 'ticket')],
      'ticket' => 'required',
      'location' => 'required',
      'email' => ['required', 'email'],
      'website' => 'required',
      'tags' => 'required',
      'description' => '',
      'logo' => '',
    ]);


    if ($request->filled('description')) {
      $formFields['description'] = $request->input('description');
    } else {
      $formFields['description'] = '';
    }

    if ($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    Band::create($formFields);

    return redirect("/")->with('success', 'Event Created Successfully!');
  }

  // Show Edit Form

  public function edit(Band $band)
  {
    return view('bands.edit', ['band' => $band]);
  }

  // Update band data
  public function update(Request $request, Band $band)
  {
    $formFields = $request->validate([
      'name' => 'required',
      'ticket' => 'required',
      'location' => 'required',
      'email' => ['required', 'email'],
      'website' => 'required',
      'tags' => 'required',
      'description' => '',
      'logo' => '',
    ]);

    if ($request->filled('description')) {
      $formFields['description'] = $request->input('description');
    } else {
      $formFields['description'] = '';
    }

    if ($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $band->update($formFields);

    return redirect("/bands/{$band->id}")->with('success', 'Event Updated Successfully!');
  }



}
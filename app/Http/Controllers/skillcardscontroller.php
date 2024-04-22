<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkillCard;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Laravel\Socialite\Facades\Socialite;


class skillcardscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SkillCard::orderBy('Title','asc')->get();
        // $skillCards = SkillCard::all();
        return view('dashboard.skill.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        // Handle image upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
        }

        // Create a new SkillCard instance with validated data
        $skillCard = new SkillCard();
        $skillCard->title = $validatedData['title'];
        $skillCard->description = $validatedData['description'];
        $skillCard->image = $imageName;
        $skillCard->save();

        // Redirect back to the index page with a success message
        return redirect()->route('skill.index')->with('success', 'Skill Card created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $data = SkillCard::where('id',$id)->first();
        return view('dashboard.skill.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    $skillCard = SkillCard::findOrFail($id);

    // Validate the incoming request data
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
    ]);

    // Update skill card data
    $skillCard->title = $validatedData['title'];
    $skillCard->description = $validatedData['description'];

    // Handle image upload if provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);
        $skillCard->image = $imageName;
    }

    $skillCard->save();

    // Redirect back to the index page with a success message
    return redirect()->route('skill.index')->with('success', 'Skill Card updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // If $id is not a string, attempt to cast it to an integer
        SkillCard::where('id',$id)->delete();
    
        // Redirect back to the index page with a success message
        return redirect()->route('skill.index')->with('success', 'Skill Card deleted successfully.');
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Initialize $imagePath to null
        $imagePath = null;

        // Check if the file was uploaded successfully
        if ($request->hasFile('image')) {
            // Store the uploaded image
            $imagePath = $request->file('image')->store('cards_images');
        }

        // Create a new card record in the database
        Card::create([
            'title' => $request->title,
            'content' => $request->content,
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Card added successfully.');
    }
}

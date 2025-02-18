<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    // Display a listing of activities with pagination
    public function index()
    {
        $activities = Activity::orderBy('id', 'desc')->paginate(10);
        return view('New-admin.activity.index', compact('activities'));
    }

    // Show the form for creating a new activity
    public function create()
    {
        return view('New-admin.activity.create');
    }

    // Store a newly created activity in the database
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|url|max:255', // Adjusting validation for link field
        ]);

        Activity::create([
            'link' => $request->input('link'),
        ]);

        return redirect()->route('activity.index')->with('success', 'Activity stored successfully!');
    }

    // Delete an activity from the database
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activity.index')->with('success', 'Activity deleted successfully!');
    }

    // Show the form for editing the specified activity
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        return view('New-admin.activity.edit', compact('activity'));
    }

    // Update the specified activity in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'link' => 'required|url|max:255', // Adjust validation for link field
        ]);

        $activity = Activity::findOrFail($id);
        $activity->update([
            'link' => $request->link,
        ]);

        return redirect()->route('activity.index')->with('success', 'Activity updated successfully!');
    }
}

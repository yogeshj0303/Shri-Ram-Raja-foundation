<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    
    public function index(){
         $abouts = About::orderBy('id', 'desc')->paginate(10);
                return view('New-admin.about.index' , compact('abouts'));

    }
    
    public function create(){
        return view('New-admin.about.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
        ]);

        About::create([
            'description' => $request->input('description'),
        ]);

        return redirect()->route('adminabout.index')->with('success', 'Data stored successfully!');
    }
    
    public function destroy($id)
{
    $about = About::findOrFail($id);
    $about->delete();

    return redirect()->route('adminabout.index')->with('success', 'Record deleted successfully!');
}
public function edit($id)
{
    $about = About::findOrFail($id);
    return view('New-admin.about.edit', compact('about'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'description' => 'required|string',
    ]);

    $about = About::findOrFail($id);
    $about->update([
        'description' => $request->description,
    ]);

    return redirect()->back()->with('success', 'About Us updated successfully!');
}


}

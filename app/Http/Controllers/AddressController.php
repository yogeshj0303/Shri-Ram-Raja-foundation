<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::orderBy('id', 'desc')->paginate(10);
        return view('New-admin.Address.index', compact('addresses'));
    }

    public function create()
    {
        // Return the view to create a new address
        return view('New-admin.Address.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'address' => 'required|string|max:255',
            'contact_no' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        // Store the address data
        Address::create([
            'address' => $request->input('address'),
            'contact_no' => $request->input('contact_no'),
            'email' => $request->input('email'),
        ]);

        // Redirect to the address index page with a success message
        return redirect()->route('address.index')->with('success', 'Address added successfully!');
    }

    public function destroy($id)
    {
        // Find and delete the address record by ID
        $address = Address::findOrFail($id);
        $address->delete();

        // Redirect back with a success message
        return redirect()->route('address.index')->with('success', 'Address deleted successfully!');
    }

    public function edit($id)
    {
        $address = Address::findOrFail($id);
        return view('New-admin.Address.create', compact('address'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'contact_no' => 'required|string|max:15',
                        'pin_no' => 'required|string|max:7',

            'email' => 'required|email|max:255',
        ]);

        // Find and update the address
        $address = Address::findOrFail($id);
        $address->update([
            'address' => $request->address,
            'contact_no' => $request->contact_no,
                        'pin_no' => $request->pin_no,

            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Address updated successfully!');
    }
}

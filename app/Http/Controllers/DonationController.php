<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
public function store(Request $request)
{
    $request->validate([
        'donator_name' => 'required|string|max:255',
        'donator_email' => 'required|email|max:255',
        'donator_phone' => 'required|digits_between:10,15',
        'donator_address' => 'required|string',
        'donator_city' => 'required|string',
        'screen_shot' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

  if ($request->hasFile('screen_shot')) {
    $file = $request->file('screen_shot');
    $fileName = time() . '_' . $file->getClientOriginalName(); // Unique filename
    $file->move(public_path('receipts'), $fileName); // Move file to public/assets/receipts
    $filePath = 'receipts/' . $fileName; // Save relative path to database
}

    // Store donation data
    Donation::create([
        'donator_name' => $request->donator_name,
        'donator_email' => $request->donator_email,
        'donator_phone' => $request->donator_phone,
        'donator_address' => $request->donator_address,
        'donator_city' => $request->donator_city,
        'screen_shot' => $filePath,
    ]);

    return redirect()->back()->with('success', 'Thank you for your donation!');
}

public function destroy($id)
{
    // Find the donation record
    $donation = Donation::find($id);

    if (!$donation) {
        return redirect()->back()->with('error', 'Donation not found.');
    }

    // Delete the donation record
    $donation->delete();

    return redirect()->back()->with('success', 'Donation deleted successfully.');
}

}

<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class NewAuthController extends Controller
{
    //     
    public function showLoginForm()
    {
        return view('New-admin.login');
    }

    public function login(Request $request)
    {
     
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed
            return redirect('/newdashboard')->with('success','You have successfully logged in');
        }

        // Authentication failed
       return redirect()->back()->withErrors(['error' => 'Invalid email or password']);
    }

    public function updateData(Request $request)
    {
        $user = User::where('id',Auth::user()->id)->first();

        // Update user data
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->last_name = $request->input('last_name');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->pincode = $request->input('pincode');

        $user->save();

        return redirect('profile')->with('success', 'Profile updated successfully.');
    }
    

    
    public function updatePassword(Request $request)
{
    $validator = Validator::make($request->all(), [
        'password' => 'required|min:8',
        'confirm_password' => 'required|same:password',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Update the user's password
    $user = Auth::user();
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->back()->with('success', 'Password updated successfully.');
}
   public function logout()
    {
       Auth::logout(); // Logout the user
        return redirect('/newlogin')->with('message','Logout successfully'); // Redirect to the home page or any other desired page

    }
}

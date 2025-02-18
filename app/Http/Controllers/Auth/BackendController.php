<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;
use App\Models\Media;
use App\Volunteer;
use App\Models\Event;
use App\Contact;
use App\Models\Award;
use App\Models\Campaign;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class BackendController extends Controller
{
    //     
    public function showContacts()
    {
        return view('New-admin.contacts');
    }
            public function destroyContact($id)
{
    $media = Contact::findOrFail($id);
    $media->delete();

    return redirect()->back()->with('success', 'Contact deleted successfully.');
}
    

    public function showVolunteer()
    {
        return view('New-admin.volunteer');
    }
    
        public function destroyVolunteer($id)
{
    $media = Volunteer::findOrFail($id);
    $media->delete();

    return redirect()->back()->with('success', 'Volunteer deleted successfully.');
}
    
    
    
        public function showMedia()
    {
        return view('New-admin.media.index');
    }
          public function createMedia()
    {
        return view('New-admin.media.create');
    }
    
    
    
        public function storeMedia(Request $request)
    {
             $validator = Validator::make($request->all(), [
        'type' => 'required|in:gallery,video',
        'file' => $request->type == 'video' ? 'nullable' : 'required|file|mimes:jpeg,png|max:10240', // Adjust max file size as needed
        'video_link' => $request->type == 'gallery' ? 'nullable' : 'required|url', // Validate if video type selected
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $media = new Media();
    
    $media->type = $request->type;

    if ($request->type == 'gallery') {
      if ($request->hasfile('file')) {


        $image = $request->file('file');

        $ext = $image->getClientOriginalExtension();

        $image_name = date('y-m-d') . '-' . rand() . '.' . $ext;

        $image->move('uploads/images/', $image_name);

        $media->file_path = $image_name;

    }
    } else {
        // Handle YouTube link for video
        $media->video_link = $request->video_link;
    }

    $media->save();

    return redirect()->route('showMedia')->with('success', 'Media uploaded successfully.');
    }
    
    public function destroyMedia($id)
{
    $media = Media::findOrFail($id);
    $media->delete();

    return redirect()->back()->with('success', 'Media deleted successfully.');
}


// Event section
    public function showEvent()
    {
        return view('New-admin.events.index');
    }
          public function createEvent()
    {
        return view('New-admin.events.create');
    }
        public function storeEvent(Request $request)
    {
             $validator = Validator::make($request->all(), [
        'event_title' => 'required',
        'event_desc' => 'required', // Adjust max file size as needed
          'event_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate if video type selected
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $media = new Event();
    $media->event_title = $request->event_title;
    $media->event_desc = $request->event_desc;

      if ($request->hasfile('event_image')) {


        $image = $request->file('event_image');

        $ext = $image->getClientOriginalExtension();

        $image_name = date('y-m-d') . '-' . rand() . '.' . $ext;

        $image->move('uploads/images/', $image_name);

        $media->event_image = $image_name;

    }
   
    $media->save();

    return redirect()->route('showEvent')->with('success', 'Event uploaded successfully.');
    }
    
    public function destroyEvent($id)
{
    $media = Event::findOrFail($id);
    $media->delete();

    return redirect()->back()->with('success', 'Event deleted successfully.');
}

// capagins
// Event section
    public function showCampaigns()
    {
        return view('New-admin.campaigns.index');
    }
          public function createCampaigns()
    {
        return view('New-admin.campaigns.create');
    }
        public function storeCampaigns(Request $request)
    {
             $validator = Validator::make($request->all(), [
        'campaigns_title' => 'required',
        'campaigns_desc' => 'required', // Adjust max file size as needed
          'campaigns_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate if video type selected
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $media = new Campaign();
    $media->campaigns_title = $request->campaigns_title;
    $media->campaigns_desc = $request->campaigns_desc;

      if ($request->hasfile('campaigns_image')) {


        $image = $request->file('campaigns_image');

        $ext = $image->getClientOriginalExtension();

        $image_name = date('y-m-d') . '-' . rand() . '.' . $ext;

        $image->move('uploads/images/', $image_name);

        $media->campaigns_image = $image_name;

    }
   
    $media->save();

    return redirect()->route('showCampaigns')->with('success', 'Campaigns uploaded successfully.');
    }
    
    public function destroyCampaigns($id)
{
    $media = Campaign::findOrFail($id);
    $media->delete();

    return redirect()->back()->with('success', 'Campaigns deleted successfully.');
}

// Awards section
    public function showAwards()
    {
        return view('New-admin.awards.index');
    }
          public function createAwards()
    {
        return view('New-admin.awards.create');
    }
        public function storeAwards(Request $request)
    {
             $validator = Validator::make($request->all(), [

          'awards_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate if video type selected
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $media = new Award();

      if ($request->hasfile('awards_image')) {


        $image = $request->file('awards_image');

        $ext = $image->getClientOriginalExtension();

        $image_name = date('y-m-d') . '-' . rand() . '.' . $ext;

        $image->move('uploads/images/', $image_name);

        $media->awards_image = $image_name;

    }
   
    $media->save();

    return redirect()->route('showAwards')->with('success', 'Award uploaded successfully.');
    }
    
    public function destroyAwards($id)
{
    $media = Award::findOrFail($id);
    $media->delete();

    return redirect()->back()->with('success', 'Award deleted successfully.');
}
public function editCampaigns($id)
{
    $campaign = Campaign::findOrFail($id);
    return view('New-admin.campaigns.edit', compact('campaign'));
}

public function updateCampaigns(Request $request, $id)
{
 // Validate the form data
        $request->validate([
            'campaigns_title' => 'required|max:255',
            'campaigns_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as per your requirements
            'campaigns_desc' => 'required',
        ]);

        // Retrieve the campaign by ID
        $campaign = Campaign::findOrFail($id);

        // Update the campaign data
        $campaign->campaigns_title = $request->input('campaigns_title');
        
        // Check if a new image file is uploaded
            if ($request->hasfile('campaigns_image')) {


        $image = $request->file('campaigns_image');

        $ext = $image->getClientOriginalExtension();

        $image_name = date('y-m-d') . '-' . rand() . '.' . $ext;

        $image->move('uploads/images/', $image_name);

        $campaign->campaigns_image = $image_name;

    }

        $campaign->campaigns_desc = $request->input('campaigns_desc');
        $campaign->save();
    // Redirect back or wherever appropriate
    return redirect()->route('showCampaigns')->with('success', 'Campaign updated successfully.');
}

public function editEvents($id)
{
    $event = Event::findOrFail($id);
    return view('New-admin.events.edit', compact('event'));
}

public function updateEvents(Request $request, $id)
{
 // Validate the form data
        $request->validate([
            'event_title' => 'required|max:255',
            'event_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as per your requirements
            'event_desc' => 'required',
        ]);

        // Retrieve the campaign by ID
        $campaign = Event::findOrFail($id);

        // Update the campaign data
        $campaign->event_title = $request->input('event_title');
        
        // Check if a new image file is uploaded
            if ($request->hasfile('event_image')) {


        $image = $request->file('event_image');

        $ext = $image->getClientOriginalExtension();

        $image_name = date('y-m-d') . '-' . rand() . '.' . $ext;

        $image->move('uploads/images/', $image_name);

        $campaign->event_image = $image_name;

    }

        $campaign->event_desc = $request->input('event_desc');
        $campaign->save();
    // Redirect back or wherever appropriate
    return redirect()->route('showEvent')->with('success', 'Event updated successfully.');
}
}

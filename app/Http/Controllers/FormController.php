<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointmentRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'required|string|max:20',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'occasion' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the form data to the database
        AppointmentRequest::create($data);

        // Send email
        Mail::to('thejnjphotography.sender@gmail.com')->send(new ContactUs($data));

        // Redirect back with a success message
        return redirect()->back()->with('success_message', 'Thank you for your inquiry! We will confirm by email.');
    }

}
    
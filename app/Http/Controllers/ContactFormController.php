<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('products.form');
    }

    public function submitForm(Request $request)
    {
        // Handle form submission logic here
        // You can access form data using $request->input('fieldname')

        // Redirect back to the form with a success message
        return redirect()->route('contact.form')->with('success', 'Form submitted successfully!');
    }
}

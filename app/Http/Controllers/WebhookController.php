<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebhookController extends Controller
{
    // public function handle(Request $request)
    // {
    //     // Validate incoming data
    //     $validatedData = $request->validate([
    //         'Form Name' => 'required|string',
    //         'Form Active' => 'required|boolean',
    //     ]);

    //     // Extract data from the request
    //     $formName = $validatedData['Form Name'];
    //     $formActive = $validatedData['Form Active'];

    //     try {
    //         $this->sendTo123FormBuilder($formName, $formActive);
    //         return response()->json(['status' => 'success'], 200);
    //     } catch (\Exception $e) {
    //         return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
    //     }
    // }

    // public function handle123FB(Request $request)
    // {
    //     // Validate and process the data received from forms.app
    //     $validatedData = $request->validate([
    //         'Form Name' => 'required|string',
    //         'Form Active' => 'required|string',
    //     ]);

    //     // Send data to the 123FormBuilder form
    //     $response = Http::post('https://form.123formbuilder.com/6772284/sample-form', [
    //         'Contact Us' => $validatedData['Contact Us'],
    //         'Form Active' => $validatedData['Form Active'],
    //     ]);

    //     if ($response->successful()) {
    //         return response()->json(['message' => 'Form data sent successfully!'], 200);
    //     } else {
    //         return response()->json(['error' => 'Failed to send form data.'], 500);
    //     }
    // }
}

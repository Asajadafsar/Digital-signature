<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class SignatureController extends Controller
{
    public function saveSignature(Request $request)
    {
        // Log the received request data for debugging
        Log::info('Received data: ', $request->all());

        // Validate the request input
        $request->validate([
            'signature' => 'required|string',
        ]);

        // Get the signature data
        $signatureData = $request->input('signature');

        // Clean the base64 string
        $signatureData = str_replace('data:image/png;base64,', '', $signatureData);
        $signatureData = str_replace(' ', '+', $signatureData);

        // Generate a unique file name
        $imageName = 'signature_' . time() . '_' . uniqid() . '.png';

        // Store the image in the public disk
        try {
            Storage::disk('public')->put($imageName, base64_decode($signatureData));
            // Create a new record in the database
            Signature::create(['image_path' => $imageName]);

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}

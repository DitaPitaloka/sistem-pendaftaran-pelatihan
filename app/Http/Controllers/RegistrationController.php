<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'selected_trainings' => 'required|array',
            'total_price' => 'required|numeric',
        ]);

        $registration = Registration::create($data);

        return response()->json([
            'message' => 'Pendaftaran berhasil!',
            'registration' => $registration,
        ]);
    }
}

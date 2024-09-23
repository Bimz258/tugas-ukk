<?php

namespace App\Http\Controllers;

use App\Models\Tamu; // Pastikan untuk menggunakan model Tamu
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        // Mengambil semua data tamu
        $guests = Tamu::all(); 
        return view('guest.index', compact('guests'));
    }
}


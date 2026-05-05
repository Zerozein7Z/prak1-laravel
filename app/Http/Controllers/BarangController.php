<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // Mengambil semua data barang dari database
        $data = Barang::all();
        
        // Mengirim data dalam format JSON
        return response()->json($data);
    }
}

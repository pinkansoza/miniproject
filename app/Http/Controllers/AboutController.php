<?php

namespace App\Http\Controllers;

use App\Models\PengenalanDepartment;
use Illuminate\Http\Request;
// Dia memanggil 'Controller' yang kita buat di langkah 1
use App\Http\Controllers\Controller; 

class AboutController extends Controller
{
    public function index()
    {
        $pengenalan_departments = PengenalanDepartment::all();
        return view('about', compact('pengenalan_departments'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ldj;
use App\Http\Controllers\Controller;

class LdjController extends Controller
{
    public function index()
    {
        $all_ldj = Ldj::all();
        return view('ldj', compact('all_ldj'));
    }
}

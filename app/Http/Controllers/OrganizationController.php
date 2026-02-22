<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrganizationStructure;
use App\Models\Setting;

class OrganizationController extends Controller
{
    public function index()
    {
        
        $departements = OrganizationStructure::all();
        
        $title = Setting::where('key', 'org_title')->value('value') ?? 'Kepengurusan FMI';

        return view('struktur', compact('departements', 'title'));
    }
}

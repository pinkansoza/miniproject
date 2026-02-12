<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganizationStructure extends Model
{
    // Ini daftar kolom yang boleh diisi
    protected $fillable = [
        'department_name', 
        'members'
    ];

    // Ini kunci utama agar data anggota (JSON) bisa dibaca sebagai daftar/list
    protected $casts = [
        'members' => 'array', 
    ];
}
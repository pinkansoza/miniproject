<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengenalanDepartment extends Model
{
    // Tambahkan baris ini. Masukkan nama kolom yang ada di tabelmu (contoh: name, deskripsi, dll)
   protected $fillable = ['name', 'description', 'image'];
}

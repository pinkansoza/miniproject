<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    // Baris sakti di bawah ini memberikan izin agar semua kolom bisa diisi data
    protected $fillable = [
    'title',
    'image',
    'description',
    'date_of_event', // Tambahkan ini
];
}

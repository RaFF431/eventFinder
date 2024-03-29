<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'Kategori_Event',
        'Deskripsi_Event',
        'Harga',
        'Tanggal_Event',
        'Lokasi_Event',
        'Nama_Event',
        'Nama_Organizer',
        'Gambar_Event',
    ];
}

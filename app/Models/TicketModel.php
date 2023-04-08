<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'Kategori_Event',
        'Nama_Organizer',
        'Lokasi_Event',
        'Nama_Event',
        'Tanggal_Event',
        'Gambar_Event',
    ];
}

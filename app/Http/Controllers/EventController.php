<?php

namespace App\Http\Controllers;
use App\Models\EventModel;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function createEvent(){return view('createEvent');}


    public function viewEvent(){
        $event = EventModel::all();

        return view('viewEvent', compact('event'));
    }

    public function store(Request $req)
    {
        EventModel::create([
            'Kategori_Event' => $req->Kategori_Event,
            'Deskripsi_Event' => $req->Deskripsi_Event,
            'Harga' => $req->Harga,
            'Tanggal_Event' => $req->Tanggal_Event,
            'Lokasi_Event' => $req->Lokasi_Event,
            'Nama_Event' => $req->Nama_Event,
            'Nama_Organizer' => $req->Nama_Organizer
        ]);

        $event = EventModel::all();

        return view('viewEvent', compact('event'));
    }
}

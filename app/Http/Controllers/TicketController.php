<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketModel;
use App\Models\EventModel;

class TicketController extends Controller
{

    public function viewAllTicket()
    {
        $ticket = TicketModel::all();

        return view('viewTicket', compact('ticket'));
    }

    public function store($id)
    {
        $ticket = EventModel::find($id);
        TicketModel::create([
            'Kategori_Event' => $ticket->Kategori_Event,
            'Nama_Organizer' => $ticket->Nama_Organizer,
            'Lokasi_Event' => $ticket->Lokasi_Event,
            'Nama_Event' => $ticket->Nama_Event,
            'Tanggal_Event' => $ticket->Tanggal_Event,
            'Gambar_Event' => $ticket->Gambar_Event,
        ]);

        $ticket = TicketModel::all();

        return view('viewTicket', compact('ticket'));
    }
}
